<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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

        $books = Book::all();
        return view('admin.book.index',['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { //dd("fuvl");
        return view('admin.book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->getValidate();

    
        
        $name = (request('name'));
        $author = request('author_name');
        $tag = $name.'-'.$author;
        Book::create([
            'book_name' => $name,
            'author_name' => $author,
            'category' => request('category'),
            'sub_category' => request('sub_category'),
            'stock' => request('stock'),
            'tag' => $tag,
            'image' => request('image')->store('category_images'),

            'description' => request('description'),

        ]);

        return redirect('/book');
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
    public function getValidate(): void
    {
        request()->validate([
            'name' => 'required',

            'author_name' => 'required',
            'category' => 'required',
            'sub_category' => 'required',
            'image' => 'image',
            'stock' => 'required|integer'

        ]);
    }
}
