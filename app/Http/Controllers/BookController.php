<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::paginate();

        $searchTerm = 'lorem';

        return view('books.index', ['books' => $books]);
    }
    public function create()
    {
        return view('books.create');
    }

    public function show($id)
    {

        $book = Book::findOrFail($id);

        return view('books.show', ['book' => $book]);
    }

    public function edit($id)
    {
        return view('books.edit', compact('id'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $newBook = new Book();
        $newBook->title = $data['title'];
        $newBook->author = $data['author'];
        $newBook->price = $data['price'];
        $newBook->img = $data['img'];
        $newBook->save();

        return redirect()->route('books.index');
    }
}
