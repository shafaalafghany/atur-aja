<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function view_books($id_group)
    {
        $check = session()->has('id');
        
        if (!$check) {
            return redirect('/login')
            ->with('message', 'Anda belum login, silahkan login terlebih dahulu.');
        }

        $data = Book::select('*')->where('group_id', '=', $id_group)->get();

        // dd($data);

        return view('books', ['data' => $data]);
    }

    public function view_add_book($id_group) {
        $check = session()->has('id');
        
        if (!$check) {
            return redirect('/login')
            ->with('message', 'Anda belum login, silahkan login terlebih dahulu.');
        }

        return view('add_book', ['data' => $id_group]);
    }

    public function store(Request $request, $id_group) {
        $check = session()->has('id');
        
        if (!$check) {
            return redirect('/login')
            ->with('message', 'Anda belum login, silahkan login terlebih dahulu');
        }

        $request->validate([
            'name' => 'required',
            'desc' => 'required|max:100'
        ]);

        $book = new Book();
        $book->book_name = $request->name;
        $book->book_description = $request->desc;
        $book->group_id = $id_group;
        $book->user_id = session()->get('id');

        if ($book->save()) {
            return redirect('/books/' . $id_group)
                ->with('message', 'Buku berhasil dibuat!');
        }
    }

    public function view_edit_book($id_group, $id_book) {
        $check = session()->has('id');
        
        if (!$check) {
            return redirect('/login')
            ->with('message', 'Anda belum login, silahkan login terlebih dahulu');
        }

        $data = Book::select('*')->where('book_id', '=', $id_book)->where('group_id', '=', $id_group)->get();

        return view('edit_book', ['data' => $data[0]]);
    }

    public function edit (Request $request, $id_group, $id_book) {
        $check = session()->has('id');
        
        if (!$check) {
            return redirect('/login')
            ->with('message', 'Anda belum login, silahkan login terlebih dahulu');
        }

        $request->validate([
            'name' => 'required',
            'desc' => 'required'
        ]);

        $affected = DB::table('books')->where('book_id', $id_book)->update([
            'book_name' => $request->name,
            'book_description' => $request->desc
        ]);

        if ($affected) {
            return redirect('/books/' . $id_group)
                ->with('message', 'Buku berhasil diperbarui!');
        }
    }

    public function delete($id_group, $id_book) {
        $check = session()->has('id');
        
        if (!$check) {
            return redirect('/login')
            ->with('message', 'Anda belum login, silahkan login terlebih dahulu');
        }

        $affected = DB::table('books')->where('book_id', $id_book)->delete();

        if ($affected) {
            return redirect('/books/' . $id_group)
                ->with('message', 'Buku berhasil dihapus!');
        }
    }
}