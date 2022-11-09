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
    return view('welcome');
});
// // URL about
Route::get('/about', function () {
    return view('ini halaman about');
});

// URL contact
//Route::get('/contact', function () {
    //return view('contact');
//});

//versi pendek URL contact 
//Route::view('/contact','contact', ['name'=> 'Alyael']);

//Versi array dalam bentuk variable 
$profile = [
    'name' => 'Alya Elidhiya',
    'phone' => '+62 877-3080-9665',
    'position' => 'Murid',
    'lahir' => '16 April 2006',
    'jk' => 'Perempuan',
    'sekolah' => 'SMKN 1 SUBANG',
];
Route::view('/profile','profile', $profile);

//Versi Data dari URL
//Ex. localhost:8000/berita/kasus-penculikan-remaja
Route::get('/berita/{id}', function ($id) {
    return 'Berita ID : ' . $id;
});

Route::get('/berita/{id}/komentar/{komentar}', function ($id,$komentar) {
    return 'Berita ID : ' . $id . '<br> Komentar Berita :' . $komentar ;
});

//Halaman Administrator
//Route::get('/admin/dashboard', function () {
//    return view('ini dashboard');
//});
//
//Route::get('/about/product', function () {
//    return view('ini product');
//});
//
//Route::get('/about/customer', function () {
//    return view('ini customer');
//});
//
//Route::get('/about/staff', function () {
//    return view('ini staff'); 
//});

Route::prefix('smkn-1-subang')->group(function () {
    Route::get('/sejarah', function () {
        return 'ini sejarah';
    });
    
    Route::get('/visi-misi', function () {
        return 'ini visi-misi';
    });
    
    Route::get('/jurusan', function () {
        return 'ini jurusan';
    });
    
    Route::get('/prestasi', function () {
        return 'ini prestasi';
    });
});