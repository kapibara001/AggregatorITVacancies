<?php

namespace App\Http\Controllers;

class LoginController extends Controller {
    public function login(Request $request) {
        # Handle login logic here
    }

    public function openLoginWin() {
        return view('layouts.loginForm');
    }
}