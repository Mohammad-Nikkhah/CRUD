<?php

use App\Http\Controllers\testController;
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
    return view('index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/form',[testController::class,'create']);
Route::get('/show',[testController::class,'index']);
Route::post('/save',[testController::class,'store']);
Route::get('/delet/{id?}',[testController::class,'destroy']);
Route::post('/update',[testController::class,'edit'])->name('edit');
Route::get('/edit/{id}',[testController::class,'form']);



