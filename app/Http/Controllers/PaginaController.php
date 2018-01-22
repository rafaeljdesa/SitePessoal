<?php

namespace App\Http\Controllers;

/* use Illuminate\Http\Request;
use Mail;
use App\Mail\OrderShipped; */

use App\Order;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class PaginaController extends Controller
{
    public function contato(Request $request){

        $contato = $request->all();

        Mail::to('rafaeljdsb1@gmail.com') -> send(new OrderShipped);
        
        return redirect('/');
    }
}
