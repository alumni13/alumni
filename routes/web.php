<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;
use App\Models\User;



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



Route::get('/',[HomeController::class,'index']);

Route::get('/home', [HomeController::class,'redirect'])->middleware('auth','verified');

Route::prefix('/viewusers')->middleware(['auth','isAdmin'])->group(function () { });


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/viewusers', [AdminController::class,'viewusers']);

    

    Route::get('/deleteusers/{id}', [AdminController::class,'deleteuser']);
});

    Route::prefix('admin')->group(function () {
        Route::get('dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'index']);


    });

    Route::get('/updateuser/{id}', [AdminController::class,'updateuser']);

    Route::get('users', [App\Http\Controllers\Admin\UserController::class, 'index']);

    Route::get('user/{user_id}',[App\Http\Controllers\Admin\UserController::class, 'edit']);


    
