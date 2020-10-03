@extends('admin.layout.app')

@section('content')

<div class="container" style="margin-top: 2em">
    <div class="row" >
        <div class="col-sm-7"><h4>Book  List</h4></div>
        <div class="col-sm-2 text-right"><a href="/book/create/"><button type="button" class="btn btn-primary ">
            Book Categories</button></a></div>
        <div class="col-sm-2 text-left"><a href="/book/create/"><button type="button" class="btn btn-primary ">
        Create New</button></a></div>
    </div>
    <div class="row" style="margin: 2em; with:100%">
        <div class="col-12  col-sm-12">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Book Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Details</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                    <tr>
                    <th scope="row">{{ $book->id}}</th>
                        <td>{{ $book->book_name}}</td>
                        <td>{{ $book->author_name}}</td>
                        <td><a class="btn btn-primary btn-lg" role="button" href="details.html">Details</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection