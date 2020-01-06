<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use Illuminate\Http\Request;

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
        $data           = $request->all();

        $authorName     = $data['author_name'];
        $authorAge      = $data['age'];
        $authorAddress  = $data['address'];
        $bookName       = $data['book_name'];
        $releaseDate    = $data['release_date'];
        $id             = (new AuthorController)->getRequestedAuthorID($authorName, $authorAge, $authorAddress, (new Author)->matchAuthor($authorName, $authorAge));

        $request->validate([
            'author_name'   => 'required | string | max:255',
            'age'           => 'required | integer | min:10',
            'address'       => 'required | string | max:255',
            'book_name'     => 'required | string | max:255',
            'release_date'  => 'required | beforeOrEqual:today'
        ]);


        Book::create([
                'author_id'     => $id,
                'book_name'     => $bookName,
                'release_date'  => $releaseDate
            ]);

        return redirect('/')
            ->with('success', 'Your book has been successfully added!');
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
