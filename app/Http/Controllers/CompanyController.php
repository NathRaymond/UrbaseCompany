<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function hires(){
        return view('company.hire');
    }

    public function hiring_history(){
        return view('company.hiring-history');
    }

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

    public function supports(Request $request){
        $input['ipaddress']= $request->ip();
        $input['email']= session()->get('email');
        $input['token']= $token = session()->get('token');
        $response = Http::withHeaders([
            'Authorization' => "Bearer $token",
            'Accept' => 'application/json',
        ])->post('https://atarchgroup.capriquota.com/api/v1/company/tickets', $input);
        $apiResponse = $response->object();
        if($apiResponse == null){
            return redirect()->route('logout');
        }
        $data['tickets'] = $apiResponse->tickets;
        // dd($data);
        return view('company.support', $data);
    }

    public function createSupport(Request $request){
        try {
            $input = $request->all();
            $input['ipaddress']= $request->ip();
            $input['token']= $token = session()->get('token');
            $response = Http::withHeaders([
                'Authorization' => "Bearer $token",
                'Accept' => 'application/json',
            ])->post('https://atarchgroup.capriquota.com/api/v1/company/tickets/create', $input);
            $apiResponse = $response->object();
            if($apiResponse == null){
                return redirect()->route('logout');
            }
            $status = $apiResponse->statusCode;
            if($status == 200){
                return redirect()->back()->with(["success" => "Support Created Successfully"]);
            }else{
                return redirect()->back()->with(["success" => "Try Again!"]);
            }
            // dd($apiResponse);
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors(['exception' => $exception->getMessage()]);
        }
    }

    public function tours(){
        return view('company.tour');
    }
}
