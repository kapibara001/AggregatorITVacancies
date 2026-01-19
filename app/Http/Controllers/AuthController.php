<?php

namespace App\Http\Controllers;

use illuminate\View\View;
use illuminate\Http\Request;
use illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller {
    // Процесс входа в существующий аккаунт
    public function login(Request $request): RedirectResponse {
        $validated = $request->validate([
            'email' => 'required|max:40',
            'password' => 'required|max:40',
        ]);
        $email = $validated['email'];
        $password = $validated['password'];

        // ...

        return redirect('/');
    }

   // Процесс регистрации нового пользователя  
    public function registration(Request $request): RedirectResponse {
        $validated = $request->validate([
            'name' => 'required|max:40|min:4|string|unique:users',
            'email' => 'required|max:40|min:6',
            'password' => 'required|min:8',
        ]);
        $name = $validated['name'];
        $email = $validated['email'];
        $password = $validated['password'];

         

        return redirect('/');
    }
    
    // Окно входа в аккаунт
    public function openLoginWin(): View {
        return view('loginForm');
    }

    // Окно регистрации аккаунта
    public function openRegWindow(): View {
        return view ('registerForm');
    }
}