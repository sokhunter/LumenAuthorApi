<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return authors list
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Create an instance of author
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        # code...
    }

    /**
     * Return a specific author
     * @return Illuminate\Http\Response
     */
    public function show($author)
    {
        # code...
    }

    /**
     * Update the information of an existing author
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $author)
    {
        # code...
    }

    /**
     * Removes an existing author
     * @return Illuminate\Http\Response
     */
    public function destroy($author)
    {
        # code...
    }
}
