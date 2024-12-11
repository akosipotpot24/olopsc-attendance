<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

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
    $values = Student::all();
    return view('welcome');
});
Route::get('/1', function () {
    $values = Student::all();
    return view('dashboard',['values'=>$values]);
});
Route::get('/2', function () {
    return view('studreg');
});
Route::get('/3', function () {
    return view('library');
});

Route::post('/register', [UserController:: class,'register']);
Route::post('/login', [UserController:: class,'login']);
Route::post('/logout', [UserController:: class,'logout']);


Route::post('/stud_reg',[StudentController::class,'student_register']);
Route::get('/edit/{value}',[StudentController::class, 'edit']);
Route::put('/edit1/{value}',[StudentController::class, 'edit1']);

Route::delete('/delete/{value}',[StudentController::class, 'delete']);


