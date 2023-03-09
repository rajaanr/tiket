<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\category_ticket;
use App\Models\Ticket;
use App\Models\User;

class TicketController extends Controller
{
    



    public function beli ($id) {
        if (auth()->user()->role == "customer") {
            $user = User::find($id);

        } else {
            $user = User::all();
        }
        
        
        $ticket = Ticket::find($id);
        return view('ticket/beli',compact('ticket','user'));
    }


    public function storeticket(Request $request){
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


    public function belitiket(Request $request){
        $request->validate([
            'qty' => 'required',
            'amount' => 'required|min:4',
        ]);
        $item = new Booking();
        $item->id_users = $request->input('id_users');
        $item->id_ticket = $request->input('id_ticket');
        $item->qty = $request->input('qty');
        $item->amount =$request->input ('amount');
        $item->officer = auth()->user()->id;
        $item->status = 'booked';
        $item->save();

        return redirect('/buyticket')->with('success','Pembelian Berhasil');

    }
}

