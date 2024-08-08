<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{

    public function userDashboard()
    {
        $books = Book::paginate(10);
        return view('userdashboard', compact('books'));
    }

    public function toggleFavorite(Request $request, Book $book)
    {
        $user = Auth::user();

        if ($user->favorites()->where('book_id', $book->id)->exists()) {
            $user->favorites()->detach($book->id);
        } else {
            $user->favorites()->attach($book->id);
        }

        return redirect()->back();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::paginate(10);
        return view('admin.book.index', compact('books'));
    }

    // User Book Show
    public function userindex()
    {
        $books = Book::paginate(10);
        return view('users.show', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'year' => 'required|integer|between:1000,' . date('Y'),
            'isbn' => 'required|string|max:13|unique:books,isbn',
        ]);
        Book::create($request->all());
        return redirect()->route('books.create')->with('success', 'Book created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('admin.book.edit', compact('book'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'year' => 'required|integer|between:1000,' . date('Y'),
            'isbn'=> 'required|string|max:13|unique:books,isbn,' . $book->id,
        ]);
        $book->update($request->all());

        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
    }
}
