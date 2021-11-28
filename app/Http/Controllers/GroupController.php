<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupDetail;
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

        $id_user = session()->get('id');

        $data = Group::select('*')->where('lead_id', '=', $id_user)->get();

        return view('groups', ['data' => $data]);
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

            $relation = new GroupDetail();
            $relation->group_detail_status = 1;
            $relation->user_id = $group->lead_id;
            $relation->group_id = $group->id;

            if ($relation->save()) {
                return redirect('groups')
                ->with('message', 'Grup berhasil dibuat!');
            }
        }
    }
}