<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->only('login', 'authenticate');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $input = request()->only(['email', 'password']);
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($input)) {
            $request->session()->regenerate();
            if (Auth::user()->roles == 'ADMIN') {
                return redirect()->route('admin-dashboard');
            } else {
                return redirect()->route('user-home');
            }
        } else {
            return back()->with([
                'error' => 'gagal login'
            ]);
        }

    }

    public function logout()
    {
        Auth::logout();

        return redirect()->intended('/login');
    }
}
