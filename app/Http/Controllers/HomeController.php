<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $books = Book::limit(4)->get();
        $academics = Book::where('category' , 1)->limit(4)->get();
        $unacademics = Book::where('category' , 2)->limit(4)->get();
        return view('home',['books' => $books, 'academics' => $academics, 'unacademics' => $unacademics]);
    }

    public function bookDetails($id){
        $book = Book::find($id);
        return view('book_detail',['book' => $book]);

    }

    public function bookall(){
        $books = Book::paginate(20);
        return view('booklist',['books' => $books]);
    }
    public function bookaca(){
        $books = Book::where('category' , 1)->paginate(20);
        return view('booklist',['books' => $books]);
    }
    public function bookbaca(){
        $books = Book::where('category' , 2)->paginate(20);
        return view('booklist',['books' => $books]);
    }
}
