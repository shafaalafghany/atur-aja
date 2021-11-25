<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function view_books()
    {
        $check = session()->has('email');
        
        if (!$check) {
            return redirect('/login')
            ->with('message', 'Anda belum login, silahkan login terlebih dahulu.');
        }

        return view('books');
    }
}