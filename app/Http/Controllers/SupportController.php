<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SupportController extends Controller
{
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
}
