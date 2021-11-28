<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function view_groups()
    {
        $check = session()->has('id');
        
        if (!$check) {
            return redirect('/login')
            ->with('message', 'Anda belum login, silahkan login terlebih dahulu.');
        }

        return view('groups');
    }

    public function add_group()
    {
        $check = session()->has('id');
        
        if (!$check) {
            return redirect('/login')
            ->with('message', 'Anda belum login, silahkan login terlebih dahulu');
        }

        return view('add_group');
    }

    public function store(Request $request)
    {
        $check = session()->has('id');
        
        if (!$check) {
            return redirect('/login')
            ->with('message', 'Anda belum login, silahkan login terlebih dahulu');
        }

        $request->validate([
            'name' => 'required',
            'desc' => 'required|max:100'
        ]);

        $group = new Group();
        $group->group_name = $request->name;
        $group->group_description = $request->desc;
        $group->lead_id = session()->get('id');

        if ($group->save()) {
            return redirect('groups')
            ->with('message', 'Grup berhasil dibuat!');
        }
    }
}