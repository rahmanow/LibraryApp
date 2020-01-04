<?php

namespace App\Http\Controllers;

use App\Authors;
use App\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $getAuthor = DB::table('authors')->where('author_name', $data['author_name'])->first();
        if(!$getAuthor) {
            $author = new Authors;
            $author->author_name = $data['author_name'];
            $author->age = $data['age'];
            $author->address = $data['address'];
            $author->save();

            $book = new Books;
            $book->author_id = $author->id;
            $book->book_name = $data['book_name'];
            $book->release_date = $data['release_date'];
            $book->save();
        } else {
            $book = new Books;
            $book->author_id = $getAuthor->id;
            $book->book_name = $data['book_name'];
            $book->release_date = $data['release_date'];
            $book->save();
        }

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function show(Books $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function edit(Books $books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Books $books)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy(Books $books)
    {
        //
    }
}
