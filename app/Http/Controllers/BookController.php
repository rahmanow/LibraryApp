<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'author_name' => 'required | string | max:255',
            'book_name' => 'required | string | max:255',
            'age' => 'required | integer | min:10',
            'release_date' => 'required | before:tomorrow',
            'address' => 'required | string | max:255'
        ]);

        $data = $request->all();

        $similarAuthorName = DB::table('authors')->where('author_name', $data['author_name'])->get();
        $authorAgeMatch = $similarAuthorName->where('age', $data['age'])->first();

        if(!$authorAgeMatch) {
            $author = new Author;
            $author->author_name = $data['author_name'];
            $author->age = $data['age'];
            $author->address = $data['address'];
            $author->save();

            $book = new Book;
            $book->author_id = $author->id;
            $book->book_name = $data['book_name'];
            $book->release_date = $data['release_date'];
            $book->save();
        } else {
            $book = new Book;
            $book->author_id = $authorAgeMatch->id;
            $book->book_name = $data['book_name'];
            $book->release_date = $data['release_date'];
            $book->save();
        }

        return redirect('/')->with('success', 'Your book has been successfully added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
