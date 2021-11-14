<?php

namespace App\Http\Controllers;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function signup() {
        return view('register');
    }

    public function store(Request $request){
        $request->validate([
            'fullname' => 'required|max:255',
            'user_email' => 'required|unique:users',
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
        return view('login');
    }
}
