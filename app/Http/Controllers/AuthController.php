<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractsView;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function login(): Factory|ContractsView|Application
    {
        return view('auth.login');
    }

    public function login_process(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6']
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Такой пользователь не найден'
        ]);
    }

    public function register(): Factory|ContractsView|Application
    {
        return view('auth.register');
    }

    public function register_process(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'surname' => ['required'],
            'patronymic' => ['required'],
            'email' => ['required', 'unique:users'],
            'password' => ['required', 'min:6', 'confirmed']
        ]);

        $user = User::create($credentials);

        Auth::login($user);

        return redirect()->intended('/');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
