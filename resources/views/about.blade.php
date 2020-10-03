@extends('layouts.app')

@section('content')
<header class="jumbotron" style="margin-top: -1.5em">
    <div class="container">
        <div class="row row-header">
            <div class="col-12 offset-sm-1 col-sm-4">
                <a class="btn btn-block btn-lg btn-warning" role="button" href="donate_form.html" id="donateBtn">DONATE BOOK</a>
            </div>
            <div class="col-12 offset-sm-2 col-sm-4">
                <a class="btn btn-block btn-lg btn-warning" role="button" href="#" id="requestBtn">REQUEST BOOK</a>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row row-content">
        <ol class="col-12 breadcrumb" style="background-color: rgb(121, 68, 38)">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active"><a href="#">About Us</a></li>
        </ol>
        <div class="col-12">
            <h3>About Us</h3>
            <hr>
         </div>
    </div>
    <div class="row row-content">
        <div class="col-12">
            <p>
                This is a book donation and borrowing website. People can donate books of various genres. The books are stored and managed by us.
                They are borrowed by the people who are in need of such books but dont have the finances to buy such kind of books at retail price.
                People need to register in the website and have a personal account. Only a verified user will be able to donate or borrow a book.<br><br>
            </p>
            <p>
                People who no longer require a book, be it an academic book or a non-academic book, can donate the book to us through this website.
                The stock of books will be maintained by us. They will be provided to other needy people who crave for books but cannot buy one.
                We aim to provide books to every needy people who hesitate to buy books from retail markets at high cost.
                We wish no person should be deprived of books.<br><br>
            </p>
            <p>
                This project idea came up during a hackathon organized by Tezpur University.
            </p>
        </div>
    </div>
</div>


<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 offset-sm-1 col-sm-4">
                <h4>Links</h4>
                <ul class="list-unstyled">
                    <li><a href="book_home.html">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
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