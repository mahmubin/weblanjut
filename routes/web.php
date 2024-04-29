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

Route::get('/home', function(){
    return view('home');
});

Route::get('/produk', function(){
    $produks = [
        [
            'kode_produk' => 'BRG001',
            'produk' => 'pena',
            'jenis_produk' => 'alat tulis',
            'harga' => 20000
        ],
        [
            'kode_produk' => 'BRG002',
            'produk' => 'buku',
            'jenis_produk' => 'alat tulis',
            'harga' => 15000
        ]
    ];

    return view('produk', ['produks' => $produks]);
});
