<?php

namespace App\Http\Controllers;

use App\Models\Skill;

class AuthenticationController extends Controller
{
  // Login v1
  public function login()
  {
    $pageConfigs = ['blankPage' => true];

    return view('/content/authentication/auth-login-v1', ['pageConfigs' => $pageConfigs]);
  }

  // Login v2
//  public function login_v2()
//  {
//    $pageConfigs = ['blankPage' => true];
//
//    return view('/content/authentication/auth-login-v2', ['pageConfigs' => $pageConfigs]);
//  }

  // Register v1
  public function register()
  {
    $skills = Skill::all();
    $pageConfigs = ['blankPage' => true];

    return view(
//        '/content/authentication/auth-register-v1',
        '/auth/register',
        [
            'pageConfigs'   => $pageConfigs,
            'skills'        => $skills
        ]
    );
  }

  // Register v2
//  public function register_v2()
//  {
//    $pageConfigs = ['blankPage' => true];
//
//    return view('/content/authentication/auth-register-v2', ['pageConfigs' => $pageConfigs]);
//  }

  // Forgot Password v1
  public function forgot_password()
  {
    $pageConfigs = ['blankPage' => true];

    return view('/content/authentication/auth-forgot-password-v1', ['pageConfigs' => $pageConfigs]);
  }

  // Forgot Password v2
//  public function forgot_password_v2()
//  {
//    $pageConfigs = ['blankPage' => true];
//
//    return view('/content/authentication/auth-forgot-password-v2', ['pageConfigs' => $pageConfigs]);
//  }

  // Reset Password
  public function reset_password()
  {
    $pageConfigs = ['blankPage' => true];

    return view('/content/authentication/auth-reset-password-v1', ['pageConfigs' => $pageConfigs]);
  }

  // Reset Password
//  public function reset_password_v2()
//  {
//    $pageConfigs = ['blankPage' => true];
//
//    return view('/content/authentication/auth-reset-password-v2', ['pageConfigs' => $pageConfigs]);
//  }
}
