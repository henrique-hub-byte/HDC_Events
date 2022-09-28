<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $nome = 'luis';
    $idade = 24;

    $lista = [1,2,3,4,5];
    $names = ['morrigan', 'gabriela', 'hades'];
    /* a view rertona ['chave do array' $variavel]  */
    return view('welcome',
     ['nome' => $nome, 
     'idade' => $idade,
     'lista' => $lista,
     'names' => $names]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/product', function () {
    return view('product');
});
