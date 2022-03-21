<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorAppointmentController;
use App\Http\Controllers\DoctorTableController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\EditDoctorController;
use App\Http\Controllers\SearchController;



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
// Route::get('/',[DoctorAppointmentController::class,'view'])->name('view');
Route::get('/search',[SearchController::class,'index'])->name('search');

Route::get('/doctor',[DoctorTableController::class,'index'])->name('doctor');


Route::get('/doctor-add',[DoctorController::class,'index'])->name('doctor.add');

Route::get('/doctor-edit',[EditDoctorController::class,'index'])->name('doctor.edit');

Route::post('/doctor-add',[DoctorController::class,'create'])->name('create');
Route::get('/edit/{id}',[DoctorController::class,'edit'])->name('edit');
Route::put('/edit/{id}',[DoctorController::class,'update'])->name('update');
Route::get('/delete/{id}',[DoctorController::class,'destroy'])->name('destroy');

Route::get('/appointment',[AppointmentController::class,'index'])->name('appointment');

Route::get('/appointment/getDoctors/{id}',[AppointmentController::class,'getDoctors']);

Route::get('/appointment/getFee/{id}',[AppointmentController::class,'getFee']);

// Route::post('/appointment/submit',[AppointmentController::class,'submit']);

Route::get('/save-data/{appointment_no}/{appointment_date}/{doctor_id}/{patient_name}/{patient_phone}/{total_fee}/{paid_amount}',[AppointmentController::class,'saveData']);


