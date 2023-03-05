<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\User;

class DashboardController extends Controller
{
    
    public function index (){
        return view('dashboard/index',['title'=>'dashboard']);
    }
    public function buy (){
        $tiket = Ticket::all();
        return view('ticket/buyticket',compact('tiket'),['title'=>'buy']);
    }
    public function add (){
        
        return view('ticket/addticket',['title'=>'buy']);
    }
   
    public function generate (){
        return view('ticket/generatelaporan',['title'=>'generate']);
    }

    
}