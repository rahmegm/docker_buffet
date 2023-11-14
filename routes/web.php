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

use App\Http\Controllers\PartyController;
Route::get('/', [PartyController::class, 'index']);


Route::get('/festas/create', [PartyController::class, 'create']);



Route::get('/contatos', function () {
    return view('contatos');
});

Route::get('/produtos', function () {

    $arr = [10,20,30,40,50];
    $nomes = ['Matheus', 'Maria', 'João', 'Saulo'];


    return view ('produtos', ['arr'=> $arr], ['nomess' => $nomes]);
});



Route::get('/eventos_teste/{id?}', function ($id =null) {
    return view('eventos', ['id'=>$id ]);
}); 

Route:: get('/eventos', function() {
    $busca= request ('search');
    return view('eventos', ['busca'=> $busca]);
}); 
