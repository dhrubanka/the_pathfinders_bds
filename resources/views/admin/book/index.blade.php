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
    <div class="row">
        <div class="col-12 offset-sm-2 col-sm-8">
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
                    <tr>
                        <th scope="row">1</th>
                        <td>Fundamentals of Software Engineering</td>
                        <td>Rajib Mall</td>
                        <td><a class="btn btn-primary btn-lg" role="button" href="details.html">Details</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Programming in C</td>
                        <td>Jayapoovan</td>
                        <td><a class="btn btn-primary btn-lg" role="button" href="#">Details</a></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Fundamentals of Software Engineering</td>
                        <td>Rajib Mall</td>
                        <td><a class="btn btn-primary btn-lg" role="button" href="details.html">Details</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection