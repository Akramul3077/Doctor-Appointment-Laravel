<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorAppointmentController;
use App\Http\Controllers\DoctorTableController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\EditDoctorController;


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



Route::get('/',[DoctorAppointmentController::class,'index'])->name('index');

Route::get('/doctor',[DoctorTableController::class,'index'])->name('doctor');


Route::get('/doctor-add',[DoctorController::class,'index'])->name('doctor.add');

Route::get('/doctor-edit',[EditDoctorController::class,'index'])->name('doctor.edit');

Route::post('/doctor-add',[DoctorController::class,'create'])->name('create');
Route::get('/edit/{id}',[DoctorController::class,'edit'])->name('edit');
Route::put('/edit/{id}',[DoctorController::class,'update'])->name('update');
Route::get('/delete/{id}',[DoctorController::class,'destroy'])->name('destroy');

Route::get('/appointment',[AppointmentController::class,'index'])->name('appointment');
