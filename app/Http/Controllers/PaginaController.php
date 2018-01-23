<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Mail\OrderShipped;




class PaginaController extends Controller
{
    public function contato(Request $request){

        Mail::to('rafael_jdsb@hotmail.com')->send(new OrderShipped($request));
        
        return redirect('/')->with('status', 'Mensagem enviada com sucesso!');
    }
}
