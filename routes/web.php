<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
 
    return view('welcome');
});

Route::get('/contatos', function () {
    return view('contatos');
});

Route::get('/cardapio', function () {

    $comidas = ['Salgados', 'Bolinhos', 'Brigadeiro, Beijinho'];


    return view ('cardapio', ['cardapio' => $comidas]);
});



Route::get('/eventos_teste/{id?}', function ($id =null) {
    return view('eventos', ['id'=>$id ]);
}); 

Route:: get('/eventos', function() {
    $busca= request ('search');
    return view('eventos', ['busca'=> $busca]);
}); 
