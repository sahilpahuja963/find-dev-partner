<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ChatController;
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

/* Route Authentication Pages */
Route::group(['prefix' => 'auth'], function () {
    Route::get('login', [AuthenticationController::class,'login'])->name('auth-login');
    Route::get('register', [AuthenticationController::class,'register'])->name('auth-register');
    Route::get('forgot-password', [AuthenticationController::class,'forgot_password'])->name('auth-forgot-password');
    Route::get('reset-password', [AuthenticationController::class,'reset_password'])->name('auth-reset-password');
    Route::get('lock-screen', [AuthenticationController::class,'lock_screen'])->name('auth-lock_screen');
});
/* Route Authentication Pages */

Route::get('project-card', function (){
    $pageConfigs = ['showMenu' => false,'layoutWidth' => 'boxed'];
    $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Layouts"], ['name' => "Layout Boxed"]];
    return view('/test1', ['pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs]);
});

Route::get('chat', [ChatController::class,'index']);

Route::get('home', function (){
    $pageConfigs = ['showMenu' => false, 'layoutWidth' => 'boxed'];
    $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Layouts"], ['name' => "Layout without menu"]];
    return view('test', ['pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs]);
});
