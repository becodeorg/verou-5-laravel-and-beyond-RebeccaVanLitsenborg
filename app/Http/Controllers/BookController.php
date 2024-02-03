<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('books.index', ['books' => $books]);
    }

    public function show ()
    {
        return view('books.edit');
    }

    public function showCreate()
    {
        return view('books.create');
    }

    public function submitCreate(Request $request)
    {
        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->genre = $request->genre;
    
        // Get the authenticated user's ID
        $user_id = Auth::id();
    
        // Add the 'user_id' to the book model
        $book->user_id = $user_id = 1;

        $book->save();
    
        return redirect()->route('allBooks');
    }

    public function editBook($id)
    {
        $book = Book::find($id);
    
        if (!$book) {
            return abort(404);
        }
    
        return view('books.edit', ['book' => $book]);
    }


    public function updateBook(Request $request, $id)
    {
        $book = Book::find($id);

        $book->title = $request->title;
        $book->author = $request->author;
        $book->genre = $request->genre;

        $book->save();

        return redirect()->route('allBooks');
    }

    public function deleteBook($id)
    {
        $book = Book::find($id);
    
        if ($book) {
            $book->delete();
        }
    
        return redirect()->route('allBooks');
    }
}