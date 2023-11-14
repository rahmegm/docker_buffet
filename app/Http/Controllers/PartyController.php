<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartyController extends Controller
{
    public function index(){
        $nome = "Matheus";
        $idade = 29;
     
        return view('welcome',
         ['nome'=> $nome, 'idade'=> $idade
    
    ]);

        
    }

    public function create() {
        return view ('festas.create');

    }
}
