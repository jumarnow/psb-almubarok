<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\SantriController;
use App\Models\Santri;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Auth::routes(['register' => false]);

Route::get('/', [LandingController::class,'index']);
Route::get('formulir', [FormulirController::class,'index']);
Route::get('cek_pendaftaran', [FormulirController::class,'cek_pendaftaran']);
Route::post('formulir/store', [FormulirController::class, 'store']);
Route::get('pernyataan_pdf', [SantriController::class,'pernyataan_pdf']);
Route::get('formulir_pdf', [SantriController::class,'formulir_pdf']);

Route::prefix('admin')->middleware(['auth'])->group(function(){
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/formulir', [SantriController::class, 'index']);
    Route::get('/delete-formulir/{id}', [SantriController::class, 'delete_formulir']);
});

