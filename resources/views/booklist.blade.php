@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 offset-sm-1 col-sm-8">
            <input type="text" class="form-control" placeholder="search..." style="margin-top: 100px;">    
        </div>
        <div class="col-12 col-sm-2">
            <div class="dropdown" style="margin-top: 100px;">
                <button class="btn btn-sucess btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter</button>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="/book/searchA">Academic</a>
                <a class="dropdown-item" href="/book/searchB">Non_Academic</a>
                
                </div>
            </div>
        </div>
    </div>
    <div class="row row-content">

        @foreach($books as $book)
        <div class="col-12 col-sm-3">
            
                <div class="card">
                    @if($book->image == NULL)
                         <img  src="{{asset("storage/img/default-book.png")}}"  style="height: 200px;width:100%">
                    @else
                        <img src="{{asset("storage/".$book->image."" )}}" style="height: 200px;width:100%">
                    @endif
                        
                    <div class="card-header">
                        <h3 class="card-title">{{ $book->book_name}}</h3>
                    Author- {{ $book->author_name}}<br>
                    </div>
                    <div class="card-body d-none d-sm-block">
                    <a href="{{route('book-detail',['id'=>$book->id ])}}" class="btn btn-danger"> Request Book</a>
                    </div>
                </div>
           
        </div>
        @endforeach
        
    </div>
    {{ $books->links() }}
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 offset-sm-1 col-sm-4">
                <h4>Links</h4>
                <ul class="list-unstyled">
                    <li><a href="book_home.html">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="col-12 offset-sm-2 col-sm-4">
                <address>
                    MCA 3rd Semester<br>
                    Tezpur University
                </address>
                <i class="fa fa-phone fa-lg"></i><a href="tel:1234567890">1234567890</a><br>
                <i class="fa fa-phone fa-lg"></i><a href="tel:1234567890">1234567890</a><br>
                <i class="fa fa-phone fa-lg"></i><a href="tel:1234567890">1234567890</a><br>
            </div>
        </div>
    </div>
</footer>

@endsection