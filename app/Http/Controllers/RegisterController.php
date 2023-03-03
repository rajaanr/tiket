<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register',[
            'title'=>'Register'
        ]);
    }

    public function store(Request $request){
        $request->validate([
        'name'=>'required',
        'email'=>'required|::dns',
        'password'=>'required|min:6',]);
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make( $request->input('password'));
        $user->role;
        $user->save();
        $request->session()->flash('success','Register berhasil!');
        return view('register');

    }
}

