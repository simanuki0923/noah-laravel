<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class AuthController extends Controller
{
      public function showLoginForm()
    {
      return view('index'); // Using 'index' as your main login form
    }

      public function login(Request $request)
    {
        $request->validate([
          'password' => 'required|string',
        ]);
        $password = $request->input('password');
         // Fetch the message associated with the password
        $message = Message::where('password', $password)->first();
        if ($message) {
          return view('personal_message', ['message' => $message]);
        } 
        else {
          return redirect()->route('login.form')->withErrors(['password' => '無効なパスワードです']);
        }
    }
}
