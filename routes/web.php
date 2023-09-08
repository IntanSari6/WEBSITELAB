<?php

use App\Http\User;
use App\Http\Controllers\mainController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ManageInventoryController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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
    return view('landing_page');
});

// Route::get('/', [mainController::class, '']);

Route::get('/dashboard', [mainController::class, 'dashboard']);

Route::get('/Inventaris', [InventoryController::class, 'inventaris']);

Route::get('/requestLoans', [MainController::class, 'requestLoans']);

Route::get('/manage_loans', [MainController::class, 'manage_loans']);

Route::get('/manage_lab_inventory', [ManageInventoryController::class, 'manage_lab_inventory']);

Route::get('/manage_schedule', [MainController::class, 'manage_schedule']);

Route::get('/lab_1', [InventoryController::class, 'lab_1']);

Route::get('/lab_2', [InventoryController::class, 'lab_2']);

Route::get('/request', [MainController::class, 'request']);

Route::get('/lab1', [ManageInventoryController::class, 'lab1']);

Route::get('/lab2', [ManageInventoryController::class, 'lab2']);

Route::get('/detail', [ManageInventoryController::class, 'detail']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

