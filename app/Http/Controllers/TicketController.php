<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class TicketController extends Controller
{
    public function store(Request $request){
        $ticket = new Booking();
        $ticket->name = $request->input('qty'); 
        $ticket->email = $request->input('amount'); 
        $ticket->status = 'booked'; 
        $ticket->save();
        $request->session()->flash('success','Register berhasil!');
        return view('/addticket');
    
    }
}

