<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class LoginController extends Controller {
    public function login(Request $request) {
        $email = $request->input('email');
        $password = hash('sha256', $request->input('password'));

        return redirect('/');
    }

    public function openLoginWin() {
        return view('layouts.loginForm');
    }
}