<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nqtSinhVienController;
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


#SinhVien - Model
Route::get('/sinhvien',[nqtSinhVienController::class,'nqtList'])->name('nqt_sinhvien.nqtList');
Route::get('/sinhvien/detail/{nqtMaSV}',[nqtSinhVienController::class,'nqtdetail'])->name('nqt_sinhvien.nqtdetail');
Route::get('/sinhvien/add',[nqtSinhVienController::class,'nqtAdd'])->name('nqt_sinhvien.nqtAdd');
