<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
  public function create(){
      return view('auth.login');
  }
  public function store(){
      $attributes = request()->validate([
          'email' => ['required','email'],
          'password' => ['required'],
      ]);
      //attempt to login the user
    if( ! Auth::attempt($attributes)){
       throw ValidationException::withMessages([
           'email' => ['sorry the email not found'],
       ]);
    }
      //regenerate the session token
      request()->session()->regenerate();

      return redirect('/');
  }
  public function destroy(){
//      dd('log the user out');
      Auth::logout();
      return redirect('/');

  }
}
