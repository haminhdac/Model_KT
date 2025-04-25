<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CrudUserController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[LoginController::class,'showLogin'])->name('showlogin');
Route::post('/login',[LoginController::class,'loginNewUser'])->name('postLogin');
Route::get('/register',[LoginController::class,'showRegister'])->name('showRegister');
Route::post('resgister',[LoginController::class,'registerNewUser'])->name('postRegister');
Route::get('/list',[LoginController::class,'showList'])->name('showList');
Route::get('/update',[LoginController::class,'showUpdate'])->name('showUpdate');
Route::post('/update',[LoginController::class,'postUpdate'])->name('postUpdate');
Route::get('dashboard', [CrudUserController::class, 'dashboard']);
Route::get('role', [RoleController::class, 'role'])->name('user.role');
Route::get('order', [OrderController::class, 'order'])->name('user.order');

Route::get('signout', [CrudUserController::class, 'signOut'])->name('signout');

Route::get('/', function () {
    return view('welcome');
});



