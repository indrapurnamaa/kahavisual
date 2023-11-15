<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function prosesLogin(Request $request) : RedirectResponse
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }

        if (Auth::guard('pelanggan')->attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
 
        return back()->withErrors([
            'username' => 'Username salah!',
        ])->onlyInput('username');
    }

    public function prosesRegister(Request $request)
    {
        $request->validate([
            'username'     => 'required|min:5',
            'password'   => 'required|min:5',
            'email'   => 'required|email',
            'nama'   => 'required',
            'telepon'   => 'required',
            'alamat'   => 'required',
        ]);

        $pelanggan = new Pelanggan([
            'username'   => $request->username,
            'password' => Hash::make($request['password']),
            'email' => $request->email,
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
        ]);
        $pelanggan->save();

        return redirect()->route('login')->with('success', 'Registrasi Berhasil. Silahkan login!');
    }

    public function logout(Request $request) : RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
