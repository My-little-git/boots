<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractsView;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(): Factory|ContractsView|Application
    {
        return view('admin.auth.login');
    }

    public function login_process(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6']
        ]);

        if (Auth('admin')->attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->route('admin.product.index');
        }

        return back()->withErrors([
            'email' => 'Такой пользователь не найден'
        ]);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
