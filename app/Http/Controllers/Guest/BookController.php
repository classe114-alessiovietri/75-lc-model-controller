<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Book;

class BookController extends Controller
{
    /*
        R - Read
    */
    public function index()
    {
        // Recuperare tutti gli elementi di questo tipo di dato
        // Book::all() -> sulla tabella che si chiama books, esegui la query:
        // SELECT * FROM books
        $books = Book::all();

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        // Recupera il singolo elemento di questo tipo di dato
        // Book::where('id', $id)->first() -> sulla tabella che si chiama books, esegui la query:
        // SELECT * FROM books WHERE id = $id
        $book = Book::where('id', $id)->first();

        return view('books.show', compact('book'));
    }
}
