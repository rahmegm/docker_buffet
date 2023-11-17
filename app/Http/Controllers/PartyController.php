<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;

class PartyController extends Controller
{
    public function index(){
       $reservas= Reserva::all();
        return view('welcome',['reservas'=>$reservas]
         );

        
    }

    public function create() {
        return view ('festas.create');

    }
}
