<?php

namespace App\Http\Controllers;

use App\Models\CategoryTicket;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\User;

class DashboardController extends Controller
{

    public function index (){
        return view('dashboard/index',['title'=>'dashboard']);
    }
    public function buy (){
        $tiket = Ticket::join('category_ticket', 'category_ticket.id', '=', 'ticket.id_category')
        ->join('users','users.id','=','ticket.officer')
        ->join('booking','booking.id_ticket','=','ticket.id')
        ->get(['category_ticket.category', 'ticket.name', 'ticket.date', 'ticket.id','ticket.quota','ticket.price'
        ,'users.name','booking.status']);
        return view('ticket/buyticket',compact('tiket'),['title'=>'buy']);
    }
    public function add (){
        $id = CategoryTicket::all();
        return view('ticket/addticket',compact('id'),['title'=>'buy']);
    }

    public function generate (){
        return view('ticket/generatelaporan',['title'=>'generate']);
    }


}
