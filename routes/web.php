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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('frontend.dashboard');
// });

// Route::get('/data-pegawai', function () {
//     return view('backend.data-pegawai.index');
// });
Route::group(['namespace' => 'App\Http\Controllers\Backend'], function()
    {
        // Route::resource('dashboard', DashboardController::class);
        Route::resource('data-pegawai', DataPegawaiController::class);
        Route::get('cetak-pegawai', [App\Http\Controllers\Backend\CetakPegawaiController::class, 'cetakPDF']);

    }
);