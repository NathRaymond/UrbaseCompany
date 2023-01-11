<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function dashboards(){
        return view('company.company-dashboard');
    }

    public function profiles(){
        return view('company.profile');
    }

    public function settings(){
        return view('company.profile');
    }

    public function notifications(){
        return view('company.notification');
    }

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

    public function supports(){
        return view('company.support');
    }

    public function tours(){
        return view('company.tour');
    }
}
