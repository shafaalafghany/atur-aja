<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function view_books($id_group)
    {
        $check = session()->has('id');
        
        if (!$check) {
            return redirect('/login')
            ->with('message', 'Anda belum login, silahkan login terlebih dahulu.');
        }

        return view('books', ['data' => $id_group]);
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
}