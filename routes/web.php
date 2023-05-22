<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConcerController;

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

Route::get('/', [ConcerController::class, 'index']);

Route::get('/masuk', function () {
    return view('login');
});

Route::get('/daftar-konser', [ConcerController::class, 'all']);

Route::get('/admin-dashboard', function () {
    return view('adminDashboard');
});

Route::get('/beli', function () {
    return view('beliTiket');
});