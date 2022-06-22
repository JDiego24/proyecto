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

Route::get('/principal', function () {
return view('index');
});
route::get('/login',function(){
    return view('login');
});
Route::get('/registro',[AlumnoController::class,'index'])->name('alumnos.index');
Route::get('/create',[AlumnoController::class,'create'])->name('alumnos.create');
Route::get('/edit/{id}',[AlumnoController::class,'edit'])->name('alumnos.edit');
Route::get('/show/{id}',[AlumnoController::class,'show'])->name('alumnos.show');
Route::post('/store',[AlumnoController::class,'store'])->name('alumnos.store');
Route::put('/update/{id}',[AlumnoController::class,'update'])->name('alumnos.update');
route::delete('/destroy/{id}',[AlumnoController::class,'destroy'])->name('alumnos.destroy');
