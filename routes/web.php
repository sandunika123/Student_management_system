<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;

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
    return view('pages.home.home');
});
Route::get('/students', function () {
    return view('pages.students.home');
});
//to show the data
Route::get('/students', [studentController::class,'showData'])->name('students.show');
//to save data
Route::POST('/students/save', [studentController::class,'saveData'])->name('students.save');

//delete
Route::get('/students/{stu_id}delete', [studentController::class,'deleteData'])->name('students.delete');


//edit
Route::get('/students/{stu_id}edit', [studentController::class,'editData'])->name('students.edit');

//update
Route::post('/students/{stu_id}update', [studentController::class,'updateData'])->name('students.update');
