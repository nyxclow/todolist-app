<?php

use App\Http\Controllers\TodoitController;
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

//Route::get('/', function () {  return view('home');});
Route::get('/',[TodoitController::class, 'index'])->name('index');
Route::post('/',[TodoitController::class, 'store'])->name('store');
Route::delete('/{todoit:id}',[TodoitController::class, 'destroy'])->name('destroy');
Route::get('/{id}/edit', [TodoitController::class, 'edit'])->name('edit');
Route::put('/{id}', [TodoitController::class, 'update'])->name('update');

