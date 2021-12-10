<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeyboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransactionController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/changePassword', [ChangePasswordController::class, 'index']);

Route::get('/category/{id}', [CategoryController::class, 'index']);

Route::get('/manageCategory', [CategoryController::class, 'manage']);

Route::get('/updateCategory/{id}', [CategoryController::class, 'showUpdateForm']);
Route::put('/updateCategory/{id}', [CategoryController::class, 'update']);

Route::delete('/deleteCategory/{id}', [CategoryController::class, 'delete']);

Route::get('/keyboard', [KeyboardController::class, 'index']);

Route::get('/addKeyboard', [KeyboardController::class, 'showAddForm']);
Route::post('/addKeyboard', [KeyboardController::class, 'add']);

Route::get('/updateKeyboard/{id}', [KeyboardController::class, 'showUpdateForm']);
Route::put('/updateKeyboard/{id}', [KeyboardController::class, 'update']);

Route::delete('/deleteKeyboard/{id}', [KeyboardController::class, 'delete']);

Route::get('/cart', [CartController::class, 'index']);

Route::get('/transaction', [TransactionController::class, 'index']);

Route::get('/transactionDetail', [TransactionController::class, 'getTransaction']);