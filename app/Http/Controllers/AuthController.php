<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        return view('home.login');
    }

    public function register(Request $request)
    {
        return view('home.register');
    }

    public function register_post(Request $request)
    {
        $request->validate([
            'username' => ['required', 'unique:users,username'],
            'email' => ['required', 'unique:users,email'],
            'password' => ['required', 'confirmed'],
        ]);

        try {
            $user = new User();

            $user->uuid = (string) Uuid::uuid4()->toString();
            $user->email = $request->email;
            $user->username = $request->username;
            $user->nama = $request->nama;
            $user->role = 'masyarakat';
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect()->route('login')->with('success', 'User berhasil registrasi');
        } catch (\Throwable $th) {
            return redirect()->route('login')->with('info\n' . $th->getMessage());
        }
    }

    public function login_post(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials, $request->has('remember'))) {
            // Periksa apakah statusenabled pengguna bernilai true
            if (Auth::user()->statusenabled == true) {
                if(Auth::user()->role == 'admin'){
                    return redirect()->route('dashboard.index')->with('success', 'Selamat Datang');
                }else{
                    return redirect()->route('home.index')->with('success', 'Selamat Datang');
                }
            } else {
                // Logout jika statusenabled adalah false
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect()->back()->with('info', 'Akun Anda tidak diaktifkan.');
            }
        }

        return redirect()->back()->with('login', 'Username atau password salah');

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Anda telah berhasil keluar');
    }
}
