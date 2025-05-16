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
    return view('home');
});

Route::get('/home', function () {
    $data = [
        'nama' => 'Ardiansyah Putraman Rukua',
        'email' => 'ardiansyahrukua07@gmail.com',
        'teman' => ['amimir','tralalelo tralala', 'lilili bahlili'],
        'isAdmin' => true
    ];

    return view('welcome', $data);
});


Route::get('/tentang', function () {
    return view('tentang');
});