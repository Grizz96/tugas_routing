<?php


use App\Http\Controllers\FirstController;
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
use App\Http\Controllers\MahasiswaController;

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::post('/tambah-mahasiswa', [MahasiswaController::class, 'mengirim']);

Route::get('/', function () {
    return view('welcome');
});

Route::controller(FirstController::class)->group(function () {
    Route::get('/tes', 'nyoba');
    
});

