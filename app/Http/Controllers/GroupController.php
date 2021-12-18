<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function view_edit_group($id) {
        $check = session()->has('id');
        
        if (!$check) {
            return redirect('/login')
            ->with('message', 'Anda belum login, silahkan login terlebih dahulu');
        }

        $data = Group::select('*')->where('group_id', '=', $id)->get();

        return view('edit_group', ['data' => $data[0]]);
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

    public function edit(Request $request, $id) {
        $check = session()->has('id');
        
        if (!$check) {
            return redirect('/login')
            ->with('message', 'Anda belum login, silahkan login terlebih dahulu');
        }

        $request->validate([
            'name' => 'required',
            'desc' => 'required'
        ]);

        $affected = DB::table('groups')->where('group_id', $id)->update([
            'group_name' => $request->name,
            'group_description' => $request->desc
        ]);

        if ($affected) {
            return redirect('groups')
                ->with('message', 'Grup berhasil diperbarui!');
        }
    }

    public function delete($id) {
        $check = session()->has('id');
        
        if (!$check) {
            return redirect('/login')
            ->with('message', 'Anda belum login, silahkan login terlebih dahulu');
        }

        $affected_group_details = DB::table('group_details')->where('group_id', $id)->delete();
        $affected_groups = DB::table('groups')->where('group_id', $id)->delete();

        if ($affected_group_details && $affected_groups) {
            return redirect('groups')
                ->with('message', 'Grup berhasil dihapus!');
        }
    }
}