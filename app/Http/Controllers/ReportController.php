<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function result(){
        return view('report.result-register');
    }
    public function thcom(){
        return view('report.thcom');
    }
    public function thorg(){
        return view('report.thorg');
    }
    public function duballcup(){
        return view('report.duballcup');
    }
    public function duballhd(){
        return view('report.duballhd');
    }
    public function duballmobile(){
        return view('report.duballmobile');
    }
    public function duballhdfree(){
        return view('report.duballhdfree');
    }
    public function landingpage(){
        return view('report.landingpage');
    }
    public function rakastep(){
        return view('report.rakastep');
    }
    public function steptaek(){
        return view('report.steptaek');
    }
    public function tdball(){
        return view('report.tdball');
    }
}
