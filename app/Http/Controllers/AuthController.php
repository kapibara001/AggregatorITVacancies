<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {
    // Процесс входа в существующий аккаунт
    public function login(Request $request): RedirectResponse {
        $validated = $request->validate([
            'email' => 'required|email|max:40',
            'password' => 'required|max:40',
        ]);

        if (Auth::attempt($validated, $request->boolean('remember'))) {
            $request->session()->regenerate();
            
            return redirect('/');
        } 

        return back()->withErrors([
            'email' => 'Email или пароль неправильные.',
        ])->onlyInput('email');
    }

    // Процесс регистрации нового пользователя  
    public function registration(Request $request): RedirectResponse {
        $validated = $request->validate([
            'name' => 'required|max:40|min:4|string|unique:users',
            'email' => 'required|email|unique:users|max:40|min:6',
            'password' => 'required|min:8|max:200|confirmed',
            'password_confirmation' => 'required|min:8|max:200',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'registration_time' => date('Y-m-d H:i:s'),
        ]);
        
        Auth::login($user);
        
        return redirect('/');
    }
    
    // Выход из аккаунта по кнопке на главной странице
    public function logout() {
        Auth::logout();

        session()->invalidate();
        session()->regenerateToken();

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