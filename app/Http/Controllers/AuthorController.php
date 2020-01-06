<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Author  $authors
     * @return \Illuminate\Http\Response
     */
    public function show(Author $authors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Author  $authors
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $authors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Author  $authors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $authors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Author  $authors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $authors)
    {
        //
    }

    //
    public function getRequestedAuthorID ($name, $age, $address, $matched)
    {
        if(!$matched) {
            return Author::create([
                'author_name'   => $name,
                'age'           => $age,
                'address'       => $address
            ])->id;
        } else {
            return $matched->id;
        }
    }
}
