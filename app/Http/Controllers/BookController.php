<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Display a listing of the books
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    // Show the form for creating a new book
    public function create()
    {
        return view('books.create');
    }

    // Store a newly created book in the database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'publication_year' => 'required|digits:4|integer|min:1000|max:' . date('Y'),
        ]);

        Book::create($request->all());
        return redirect()->route('books.list')->with('success', 'Book added successfully!');
    }

    // Method for displaying the list page
    public function list()
    {
        $books = Book::all();
        return view('books.list', compact('books'));
    }

    // Show the form for editing a specific book
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    // Update the specified book in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'publication_year' => 'required|digits:4|integer|min:1000|max:' . date('Y'),
        ]);

        $book = Book::findOrFail($id);
        $book->update($request->all());
        return redirect()->route('books.list')->with('success', 'Book updated successfully!');
    }

    // Remove the specified book from the database
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('books.list')->with('success', 'Book deleted successfully!');
    }

    //Search 
    public function search(Request $request)
{
    $query = $request->input('query');
    $books = Book::where('title', 'LIKE', "%{$query}%")
                  ->orWhere('author', 'LIKE', "%{$query}%")
                  ->get();

    return view('books.list', compact('books'));
}

}
