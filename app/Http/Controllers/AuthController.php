<?php

namespace App\Http\Controllers;



/**
 *
 */
class AuthController extends Controller
{

  public function login()
  {
    # code...
    return view('auth.login');
  }

  public function register()
  {
    # code...
    return view('auth.register');
  }
}
