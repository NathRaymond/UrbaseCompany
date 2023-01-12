<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Exception;
use App\Library\IpAddress;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('company.company-dashboard');
    }

    public function profiles(){
        return view('company.profile');
    }

    public function settings(){
        return view('company.profile');
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
        dd($response->json(), $response->object());
        if ($response->object() == null) {
            return redirect('/logout');
        }
        $data['notifications'] = $value->data;
        return view('company.notification', $data);
    }

}
