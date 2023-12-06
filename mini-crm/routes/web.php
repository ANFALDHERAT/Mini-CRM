<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\adminLoginController;

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
    return view('HomePage.index');
});

Route::resource('/companies',CompanyController::class)->middleware('isLogedin');
Route::resource('/employees',EmployeeController::class)->middleware('isLogedin');


Route::get('/adminLogin', [adminLoginController::class, 'adminLogin'])->name('adminLogin');
Route::post('/adminLoginPost', [adminLoginController::class, 'adminLoginPost'])->name('adminLogin');
Route::get('/adminLogout', [adminLoginController::class, 'adminLogout'])->name('adminLogout');
Route::get('/dash', [adminController::class, 'adminLogout']);

