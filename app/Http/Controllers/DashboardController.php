<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index (){
        return view('dashboard/index',['title'=>'dashboard']);
    }
    public function buy (){
        return view('ticket/buyticket',['title'=>'buy']);
    }
    public function add (){
        return view('ticket/addticket',['title'=>'ad']);
    }
    public function generate (){
        return view('ticket/generatelaporan',['title'=>'generate']);
    }

    
}