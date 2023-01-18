<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function register(){ //Registration View....
        return view('register');
    }

    public function verify(){
        return view('verify');
    }

    public function verifypasswordotp(){
        return view('verifypasswordotp');
    }

    public function login(Request $request){
       
        set_time_limit(500);
        //Login Logic Here....
        $theUrl = config('app.api_test_base_url').'/company/login';
        $response= Http::post($theUrl, [
            'email'=>$request->email,
            'password'=>$request->password,
            'device'=>"124:441:55:8",
            'ipaddress'=>$request->ip()
        ]);  
        $returnedData = $response->json();
        if($returnedData == null){
            session(['email' => $request->email]);
            return redirect()->route('verify');
        }
        if ($response->json()['statusCode'] == 400){
            return redirect()->back()->withErrors([$response->json()['error']]);
        }
        else{
            session(['email' => $request->email]);
            $token = $returnedData['0']['token']['original']['access_token'];
            session(['token' => $token]);
            $data['user'] = $returnedData['0']['token']['original']['company'];
            session(['user' => $data['user']]);
            return redirect()->route('dashboard');
        }
    }

    public function reg(Request $request){ 
        $theUrl = config('app.api_test_base_url').'/company/register';
        $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $response= Http::post($theUrl, [
            'company'=> $request->company,
            'role'=> $request->role,
            'fullname'=> $request->fullname,
            'email'=>$request->email,
            'password'=>$request->password, 
            'confirm_password'=>$request->password, 
            'status'=> "Active",
            'ipaddress'=> $request->ip(),
        ]);
        $returnedData = $response->json();
        if ($response->json()['statusCode'] == 400){
            return redirect()->back()->withErrors([$response->json()['error']]);
        }
        else{
            session(['email' => $request->email]);
            return redirect()->route('verify');
        }
    }

    public  function verifyOtp(Request $request){
        $password = $request->value.''.$request->value1.''.$request->value2.''.$request->value3.''.$request->value4.''.$request->value5;
        $theUrl = config('app.api_test_base_url').'/company/verify';
        $response= Http::post($theUrl, [
            'ipaddress'=> $request->ip(),
            'email'=>$request->email,
            'token'=>$password
        ]);
        $start = $response->json();
        if($start['statusCode'] == 200){
            return redirect()->route('logout')
            ->with('success', $start['success']);
        }else{
            return redirect()->back()->withErrors([$start['error']]);
        }
    }

    public  function resendOtp(Request $request){
        try {
            $input['token']= $token = session()->get('token');
            $input['email']=  $email = session()->get('email');
            $input['ipaddress']= $request->ip();
            $response = Http::withHeaders([
                'Authorization' => "Bearer $token",
                'Accept' => 'application/json',
            ])->post('https://atarchgroup.capriquota.com/api/v1/company/resend-verification', $input);
            $start = $response->object();
            $theUrl = config('app.api_test_base_url').'/company/resend';
            $response= Http::post($theUrl, [
                'ipaddress'=> $request->ip(),
                'email'=>$email,
                'token'=>$token
            ]);
            return redirect()->back()->with(["success" => "OTP Sent Successfuly to $email"]);
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors(['exception' => $exception->getMessage()]);
        }
    }

    public function forget_password(){
        return view('company.company-forgot-password');
    }

    public function create_new_password(){
        return view('company.company-create-new-password');
    }
    
    public function forgetpassword(Request $request){
        $theUrl = config('app.api_test_base_url').'/company/forgot';
        $response= Http::post($theUrl, [
            'email'=>$request->email,
            'ipaddress'=> $request->ip(),
        ]);
        $returnedData = $response->json();
        if ($response->json()['statusCode'] == 400){
            return redirect()->back()->withErrors([$response->json()['error']]);
        }
        else{
            session(['email' => $request->email]);
            return redirect()->route('verifypasswordotp');
        }
    }

    public  function verifyforgottenOtp(Request $request){
        $password = $request->value.''.$request->value1.''.$request->value2.''.$request->value3.''.$request->value4.''.$request->value5;
        $theUrl = config('app.api_test_base_url').'/company/reset';
        $response= Http::post($theUrl, [
            'ipaddress'=> $request->ip(),
            'email'=>$request->email,
            'token'=>$password
        ]);
        $start = $response->json();
        if($start['statusCode'] == 200){
            return redirect()->route('create-new-password')
            ->with('success', $start['success']);
        }else{
            return redirect()->back()->withErrors([$start['error']]);
        }
    }

    public function create_password(Request $request){
        try{
        $theUrl = config('app.api_test_base_url').'/company/updatepassword';
       
        $validator = Validator::make($request->all(), [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
       ]);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $response= Http::post($theUrl, [
            'email'=>session()->get('email'), 
            'password'=>$request->password, 
            'confirm-password'=>$request->password_confirmation, 
            'ipaddress'=> $request->ip(),
        ]);
        $start = $response->json();
        if($start['statusCode'] == 200){
            return redirect()->route('logout')
            ->with('success', $start['message']);
        }
       
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors(['exception' => $exception->getMessage()]);
        }
    }

    public function logout()
    {
      Session::flush();
      Auth::logout();
  
      return redirect('/');
    }

}
