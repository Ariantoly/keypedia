<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeyboardController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'showLoginPage'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterPage'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/changePassword', [AuthController::class, 'showChangePasswordPage'])->middleware('auth');

Route::get('/category/{id}', [CategoryController::class, 'index']);
Route::get('/category/keyboard/{id}', [CategoryController::class, 'search']);

Route::get('/manageCategory', [CategoryController::class, 'manage'])->name('manage')->middleware('auth')->middleware('auth.role:Manager');

Route::get('/updateCategory/{id}', [CategoryController::class, 'showUpdatePage'])->middleware('auth')->middleware('auth.role:Manager');
Route::put('/updateCategory/{id}', [CategoryController::class, 'update']);

Route::delete('/deleteCategory/{id}', [CategoryController::class, 'delete']);

Route::get('/keyboard/{id}', [KeyboardController::class, 'index'])->name('keyboard');

Route::get('/addKeyboard', [KeyboardController::class, 'showAddPage'])->middleware('auth')->middleware('auth.role:Manager');
Route::post('/addKeyboard', [KeyboardController::class, 'add']);

Route::get('/updateKeyboard/{id}', [KeyboardController::class, 'showUpdatePage'])->middleware('auth')->middleware('auth.role:Manager');
Route::put('/updateKeyboard/{id}', [KeyboardController::class, 'update']);

Route::delete('/deleteKeyboard/{id}', [KeyboardController::class, 'delete']);

Route::get('/cart', [CartController::class, 'index'])->name('cart')->middleware('auth')->middleware('auth.role:Customer');
Route::post('/addCart/{id}', [CartController::class, 'addCart'])->middleware('auth')->middleware('auth.role:Customer');
Route::put('/updateCart/{cartId}/keyboard/{keyboardId}', [CartController::class, 'updateCart']);
Route::delete('/deleteCart', [CartController::class, 'deleteCart'])->name('deleteCart');

Route::get('/transaction', [TransactionController::class, 'index'])->middleware('auth')->middleware('auth.role:Customer');

Route::get('/transactionDetail', [TransactionController::class, 'getTransaction'])->middleware('auth')->middleware('auth.role:Customer');