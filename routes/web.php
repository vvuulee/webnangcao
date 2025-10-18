<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

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
    return view('welcome');
});
//trang hien tat ca khoa hoc
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
//hien thi form tao khoa hoc
Route::get('/courses/create',[CourseController::class,'create'])->name('courses.create');
//luu du lieu tu form vao database
Route::post('/courses',[CourseController::class,'store'])->name('courses.store');
//hienj thi thong tin chi tiet khoa hoc
Route::get('/courses/{course}',[CourseController::class,'show'])->name('courses.show');
//chinhr sua khoa hoc
Route::get('/courses/{course}/edit',[CourseController::class,'edit'])->name('courses.edit');
//cap nhat tu from chinh suar vao database
Route::put('/courses/{course}',[CourseController::class,'update'])->name('courses.update');
//xoa khoa khoc
Route::delete('/courses/{course}',[CourseController::class,'destroy'])->name('courses.destroy');