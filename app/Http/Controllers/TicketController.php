<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function store(Request $request){
        $ticket = new Booking();
        $ticket->name = $request->input('qty'); 
        $ticket->email = $request->input('amount'); 
        $ticket->status = 'booked'; 
        $ticket->save();
        $request->session()->flash('success','Register berhasil!');
        return view('/');
    
    }

    public function addticket(){
        return view('ticket/addticket');
    }

    public function beli ($id) {
        $ticket = Ticket::find($id);
        return view('ticket/beli',compact('ticket'));
    }
}

