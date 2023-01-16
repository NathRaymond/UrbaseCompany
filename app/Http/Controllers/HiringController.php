<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HiringController extends Controller
{
    public function hires(Request $request){
        return view('company.hire');
    }

    public function hiring_history(){
        return view('company.hiring-history');
    }
}
