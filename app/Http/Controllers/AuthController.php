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

    public function loginpage(Request $request){
       
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
        // dd($response->json(),$response->body());
        if($returnedData == null){
            session(['email' => $request->email]);
            return redirect()->route('verify');
        }
        if ($response->json()['statusCode'] == 400){
            return redirect()->back()->withErrors([$response->json()['error']]);
        }
        else{
            $token = $returnedData['0']['token']['original']['access_token'];
            session(['token' => $token]);
            $data['user'] = $returnedData['0']['token']['original']['company'];
            session(['user' => $data['user']]);
            return redirect()->route('dashboard');
        }
    }

    public function reg(Request $request){ 
        $theUrl = config('app.api_test_base_url').'/company/register';
        // $data = $request->all();
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
            'deleted'=>0,
        ]);
        $returnedData = $response->json();
        // dd($response->json(),$response->object());
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
        // dd($response->json(),$response->object());
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

    public function login()
    {
      return view('welcome');
    }

    public function logout()
    {
      Session::flush();
      Auth::logout();
  
      return redirect('/');
    }

}
