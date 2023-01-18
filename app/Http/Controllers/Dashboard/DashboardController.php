<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('company.company-dashboard');
    }

    public function profiles()
    {
        set_time_limit(500);
        $theUrl = config('app.api_test_base_url') . '/company/profile';
        $token = session()->get('token');
        $response = Http::withHeaders([
            'Authorization' => "Bearer $token",
            'Accept' => 'application/json',
        ])->get($theUrl);
        if ($response->object() == null) {
            return redirect('/logout');
        }
        $value = $response->object();
        $data['companys'] = $value->company;
        $data['informations'] = $value->information;
        $data['abouts'] = $value->about;
        $data['tours'] = $value->tour;
        if ($data['informations']) {
            $data['avatar'] = $data['informations']->avatar;
        } else {
            $data['avatar'] = "";
        }
        return view('company.profile',$data);
    }

    public function update_about(Request $request)
    {
        $input = $request->all();
        $input['ipaddress'] = $request->ip();
        $input['about'] = $request->about;
        $token = session()->get('token');
        $response = Http::withHeaders([
            'Authorization' => "Bearer $token",
            'Accept' => 'application/json',
        ])->post('https://atarchgroup.capriquota.com/api/v1/company/profile/about', $input);
        $start = $response->json();
        if ($start['statusCode'] == 200) {
            return redirect()->back()->with(['success' => "About updated successfully"]);
        }
    }

    public function settings(){
        return view('company.setting');
    }

    public function notifications(Request $request){
        $theUrl = config('app.api_test_base_url') . '/company/notification';
        $token = session()->get('token');
        $input['ipaddress'] = $request->ip();
        $response = Http::withHeaders([
            'Authorization' => "Bearer $token",
            'Accept' => 'application/json',

        ])->post($theUrl, $input);
        $value = $response->object();
        if ($response->object() == null) {
            return redirect('/logout');
        }
        $data['notifications'] = $value->notification;
        return view('company.notification', $data);
    }

    public function update_information(Request $request)
    {
        try {
            $input = $request->all();
            $input['name'] = $request->name;
            $input['industry'] = $request->industry;
            $input['website'] = $request->website;
            $input['size'] = $request->size;
            $input['location'] = $request->location;
            $input['address'] = $request->address;
            $input['ipaddress'] = $request->ip();
            $token = session()->get('token');
            if ($request->file('avatar')) {
                $response = Http::withHeaders([
                    'Authorization' => "Bearer $token",
                    'Accept' => 'multipart/form-data',
                ])->attach('avatar', file_get_contents($request->file('avatar')), 'company-profile-pic-modal.png')->post('https://atarchgroup.capriquota.com/api/v1/company/profile/information', $input);
            } else {
                $response = Http::withHeaders([
                    'Authorization' => "Bearer $token",
                    'Accept' => 'multipart/form-data',
                ])->post('https://atarchgroup.capriquota.com/api/v1/company/profile/information', $input);
            }
            $start = $response->json();
            // dd($response->json());
            if ($start['statusCode'] == 200) {
                return redirect()->back()->with(['success' => "Company Profile Updated successfully"]);
            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(["exception" => $e->getMessage()])->withInput($request->all());
        }
    }

}
