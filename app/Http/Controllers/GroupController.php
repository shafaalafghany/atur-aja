<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function view_groups()
    {
        $check = session()->has('email');
        
        if (!$check) {
            return redirect('/login')
            ->with('message', 'Anda belum login, silahkan login terlebih dahulu.');
        }

        return view('groups');
    }
}