<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/riwayat', function () {
    return view('riwayatUser');
});

Route::get('/inputDistribusi', function () {
    return view('inputDistribusiAdmin');
});

Route::get('/transaksi', function () {
    return view('transaksiAdmin');
});