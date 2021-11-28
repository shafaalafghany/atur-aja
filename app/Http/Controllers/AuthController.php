<?php

namespace App\Http\Controllers;
use Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function signup() {
        $check = session()->has('id');
        
        if ($check) {
            return back()
            ->with('message', 'Anda telah login.');
        }

        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|max:255',
            'user_email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);
        
        $checkEmail = User::where('user_email', $request->user_email)->first();
        if ($checkEmail) {
            return redirect()
            ->back()
            ->with('message', 'Email sudah terdaftar');
        }

        if (strlen($request->password < 6)) {
            return redirect()
            ->back()
            ->with('message', 'Kata sandi terlalu pendek');
        }

        $user = new User();
        $user->user_fullname = $request->fullname;
        $user->user_email = $request->user_email;
        $user->user_password = Hash::make($request->password);

        if ($user->save()) {
            return redirect()
            ->action([AuthController::class, 'signin'])
            ->with('message', 'Akun telah berhasil dibuat, silahkan login.');
        }
    }

    public function signin() {
        $check = session()->has('id');
        
        if ($check) {
            return back()
            ->with('message', 'Anda telah login.');
        }

        return view('login');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('user_email', $request->email)->first();
        $checkPass = Hash::check($request->password, $user->user_password);
        if (!$user || !$checkPass) {
            return back()
            ->with('message', 'Email atau password salah');
        }

        $data = explode(" ", $user['user_fullname']);
        
        $request->session()->put('id', $user['user_id']);
        $request->session()->put('name', $data[0]);
        return redirect('/');
    }

    public function logout() {
        $check = session()->has('id');
        
        if (!$check) {
            return redirect('/login')
            ->with('message', 'Anda belum login, silahkan login terlebih dahulu');
        }

        session()->pull('id');
        return redirect('/');
    }
}
