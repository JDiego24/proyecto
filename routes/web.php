<?php

use App\Http\Controllers\AlumnoController;
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
Route::get('/registro',[AlumnoController::class,'index'])->name('alumnos.index');
Route::get('/create',[AlumnoController::class,'create'])->name('alumnos.create');
Route::get('/edit',[AlumnoController::class,'edit'])->name('alumnos.edit');
