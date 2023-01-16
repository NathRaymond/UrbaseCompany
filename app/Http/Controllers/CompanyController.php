<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class CompanyController extends Controller
{
    // public function hires(){
    //     return view('company.hire');
    // }


    public function talents(){
        return view('company.talent');
    }

    public function talents_profile(){
        return view('company.talent-profile');
    }

    public function standups(){
        return view('company.standup');
    }

    public function standup_update(){
        return view('company.standup-update');
    }

    public function wellbeings(){
        return view('company.wellbeing');
    }

    public function billings(){
        return view('company.billings');
    }

    public function billings_view_pool(){
        return view('company.billings-view-pool');
    }


    public function tours(Request $request){
        $input['ipaddress']= $request->ip();
        $input['token']= $token = session()->get('token');
        $response = Http::withHeaders([
            'Authorization' => "Bearer $token",
            'Accept' => 'application/json',
        ])->post('https://atarchgroup.capriquota.com/api/v1/company/profile/companytourstatus', $input);
        $apiResponse = $response->object();
        $data['tour'] = $apiResponse->tour_onboard;
        if($apiResponse == null){
            return redirect()->route('logout');
        }
        return view('company.tour');
    }

    public function update_tour(Request $request)
    {
        $input['ipaddress'] = $request->ip();
        $input['tour_onboard'] = intval($request->tour_onboard);
        $token = session()->get('token');
        $response = Http::withHeaders([
            'Authorization' => "Bearer $token",
            'Accept' => 'application/json',
        ])->post('https://atarchgroup.capriquota.com/api/v1/company/profile/updatecompanystatus', $input);
        $start = $response->json();
        if ($start['statusCode'] == 200) {
            return redirect()->back()->with(['success' => "Video Watched"]);
        }
    }
}
