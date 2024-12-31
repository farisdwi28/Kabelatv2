<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\KomunitasController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        $loginType = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $credentials = [
            $loginType => $request->input('login'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($credentials)) {
            return redirect('/');
        }

        return back()->withErrors([
            'login' => 'Username/email atau password tidak valid.',
        ])->withInput($request->except('password'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/login');
    }
    public function showLoginForm()
{
    return view('auth.login'); // Pastikan view ini tersedia
}
protected function authenticated(Request $request, $user)
{
    $komunitasJoinController = new KomunitasController();
    $redirectResponse = $komunitasJoinController->checkPendingJoin();
    
    if ($redirectResponse) {
        return $redirectResponse;
    }
    
    return redirect()->intended();
}
}