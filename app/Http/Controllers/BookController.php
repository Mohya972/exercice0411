<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $books = Book::orderBy('id', 'desc')->paginate(8);
        return view('book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:100',
            'isbn' => 'required|string|max:20|unique:books,isbn',
            'year' => 'required|integer|min:0|max:' . date('Y'),
            'publisher' => 'required|string|max:100',
        ]);
        $book = Book::create($validated);
        return redirect()->route('book.index', $book)->with('success', 'Book créé avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
