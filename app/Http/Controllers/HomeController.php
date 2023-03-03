<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){
        $users = User::all();
        return view('home',compact('users'),[
            'title'=>'Home'
        ]);
    }
    public function About (){
        return view('About',[
            'title'=>'About'
        ]);
    }
    
}
