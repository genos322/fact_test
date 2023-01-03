<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return Redirect('/home');
});
Route::get('/home', function () {
    return view('user.home');
})->name('user.home');
Route::controller(RegisterController::class)->group(function () {
    Route::match(['get', 'post'], 'user/registrarVenta', 'actionInsert')->name('user.registrarVenta');
    Route::get('user/listarVentas', 'actionList')->name('user.listarVentas');
});
Route::get('user/listarVentas', function () {
    return view('user.listarVentas');
})->name('user.listarVentas');
