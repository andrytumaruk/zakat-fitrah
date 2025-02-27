<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/pembayaran', function () {
    return view('pembayaran');
});

Route::get('/Dashboard',function(){
    return view('DashboardAdmin');
});

Route::get('/zakat',function(){
    return view('zakat');
});

Route::get('/Transaksi',function(){
    return view('TransaksiDetails');
});

Route::get('/Confirm',function(){
    return view('ConfirmRegistrasi');
});

Route::get('/Riwayat',function(){
    return view('RiwayatUser');
});
