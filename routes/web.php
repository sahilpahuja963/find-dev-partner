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
    Route::get('login-v1', [AuthenticationController::class,'login_v1'])->name('auth-login-v1');
    Route::get('login-v2', [AuthenticationController::class,'login_v2'])->name('auth-login-v2');
    Route::get('register-v1', [AuthenticationController::class,'register_v1'])->name('register');
    Route::get('register-v2', [AuthenticationController::class,'register_v2'])->name('auth-register-v2');
    Route::get('forgot-password-v1', [AuthenticationController::class,'forgot_password_v1'])->name('auth-forgot-password-v1');
    Route::get('forgot-password-v2', [AuthenticationController::class,'forgot_password_v2'])->name('auth-forgot-password-v2');
    Route::get('reset-password-v1', [AuthenticationController::class,'reset_password_v1'])->name('auth-reset-password-v1');
    Route::get('reset-password-v2', [AuthenticationController::class,'reset_password_v2'])->name('auth-reset-password-v2');
    Route::get('lock-screen', [AuthenticationController::class,'lock_screen'])->name('auth-lock_screen');
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
