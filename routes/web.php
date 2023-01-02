<?php

use Illuminate\Queue\RedisQueue;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Redirect('/home');
});
Route::get('/home' , function(){
    return view('user.home');
})->name('user.home');
Route::get('user/registrarVenta' , function(){
    return view('user.registrarVenta');
})->name('user.registrarVenta');
Route::get('user/listarVentas' , function(){
    return view('user.listarVentas');
})->name('user.listarVentas');