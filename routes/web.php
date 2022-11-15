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

// URL Indeks / home
Route::get('/', function () {
    $user = ['name' => 'David', 'role' => 'teller'];
    return view ('pages.home', $user);
});

Route::redirect('/home','/');

Route::get('/about', function(){
    $user = ['name' => 'Asep', 'role' => 'admin'];
    return view ('pages.about', $user);
});

Route::get('/contact', function(){
    $data = [
        "person" => ["Rizky", "gavin", "firdaus", "Dzaky", "Iqbal"]
    ];
    return view ('pages.contact', $data);
});