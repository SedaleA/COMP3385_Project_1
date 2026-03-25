<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class Bookcontroller extends Controller
{
    public function create ()
    {
        return view('books.create');
    }

    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function show($id)

    {
    
    $book = Book::findOrFail($id);
    return view('books.show', compact('book')); 

        
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'course_code' => 'required',
            'price' => 'required|numeric',
            'condition' => 'required',
            'description' => 'required',
            'photo' => 'required|image'
        ]);

        $path = $request->file('photo')->store('photos', 'public');

        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'course_code' => $request->course_code,
            'price' => $request->price,
            'condition' => $request->condition,
            'description' => $request->description,
            'photo' => $path
        ]);

        return redirect('/books')->with('success', 'Book added successfully!');
    }

}
