<?php

use Illuminate\Support\Facades\Route;
// import User Controller
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;

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


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Routes for User

Route::prefix('user')->name('user.')->group(function(){

    // inside prefix user we want two routes: one for guests and one for auths
    Route::middleware(['guest:web'])->group(function(){
        Route::view('/login', 'dashboard.user.login')->name('login');
        Route::view('/register', 'dashboard.user.register')->name('register');
        Route::post('/create', [UserController::class, 'create'])->name('create');
        Route::post('/dologin', [UserController::class, 'dologin'])->name('dologin');
    });
    Route::middleware(['auth:web'])->group(function(){
        Route::view('/home', 'dashboard.user.home')->name('home');
        Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    });

});

// Routes for Admin

Route::prefix('admin')->name('admin.')->group(function(){

    // inside prefix admin we want two routes: one for guests and one for auths
    Route::middleware(['guest:admin'])->group(function(){
        Route::view('/login', 'dashboard.admin.login')->name('login');
        Route::view('/register', 'dashboard.admin.register')->name('register');
        Route::post('/create', [AdminController::class, 'create'])->name('create');
        Route::post('/dologin', [AdminController::class, 'dologin'])->name('dologin');
    });
    Route::middleware(['auth:admin'])->group(function(){
        Route::view('/home', 'dashboard.admin.home')->name('home');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
    });

});
