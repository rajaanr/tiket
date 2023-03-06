<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\category_ticket;
use App\Models\Ticket;
use App\Models\User;

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



    public function beli ($id) {
        $users = User::all();
        $ticket = Ticket::find($id);
        return view('ticket/beli',compact('ticket','users'));
    }


    public function storeticketadmin(Request $request){
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'quota' => 'required',
            'price' => 'required|min:4',
        ]);


        $ticket = new Ticket();

        $ticket->id_category = $request->input('id_category');
        $ticket->name = $request->input('name');
        $ticket->date = $request->input('date');
        $ticket->quota = $request->input('quota');
        $ticket->status = 'post';
        $ticket->price = $request->input('price');
        $ticket->officer = auth()->user()->id;
        $ticket->save();

        return redirect('/addticket')->with('success','Tiket berhasil Dibuat');

    }
}

