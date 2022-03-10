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
//    Route::get('login-v2', [AuthenticationController::class,'login_v2'])->name('auth-login-v2');
//    Route::get('register-v2', [AuthenticationController::class,'register_v2'])->name('auth-register-v2');
//    Route::get('forgot-password-v2', [AuthenticationController::class,'forgot_password_v2'])->name('auth-forgot-password-v2');
//    Route::get('reset-password-v2', [AuthenticationController::class,'reset_password_v2'])->name('auth-reset-password-v2');
});
/* Route Authentication Pages */

Route::get('test1', function (){
    $pageConfigs = ['showMenu' => false,'layoutWidth' => 'boxed'];
    $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Layouts"], ['name' => "Layout Boxed"]];
    return view('/test1', ['pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs]);
});

Route::get('chat', function (){
    $pageConfigs = [
        'pageHeader' => false,
        'contentLayout' => "content-left-sidebar",
        'pageClass' => 'chat-application',
    ];
    return view('chat', [
        'pageConfigs' => $pageConfigs
    ]);
});

Route::get('Login', function (){
    $pageConfigs = [
        'bodyClass' => "bg-full-screen-image",
        'blankPage' => true
    ];

    return view('Login', [
        'pageConfigs' => $pageConfigs
    ]);
});
Route::get('test', [ChatController::class,'index']);
//Route::get('test', function (){
//    $pageConfigs = ['showMenu' => false, 'layoutWidth' => 'boxed'];
//    $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Layouts"], ['name' => "Layout without menu"]];
//    return view('test', ['pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs]);
//});
