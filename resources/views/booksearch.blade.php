@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 offset-sm-1 col-sm-8">
            <input type="text" class="form-control" placeholder="search..." style="margin-top: 100px;">    
        </div>
        <div class="col-12 col-sm-2">
            <div class="dropdown" style="margin-top: 100px;">
                <button class="dropbtn btn-primary"><span class="fa fa-filter"></span> Filter</button>
                <div class="dropdown-content" id="myDropdown">
                    <a href="#">Academic</a>
                    <a href="#">Non-Academic</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-content">
        <div class="col-12 col-sm-3">
            <a href="details.html">
                <div class="card">
                        <img src="pics/software_engineering_rajib_mall.png">
                    <div class="card-header">
                        <h3 class="card-title">Fundaments of Software Engineering</h3>
                        Author- Rajib Mall<br>
                    </div>
                    <div class="card-body d-none d-sm-block">
                        A book on software engineering fundamentals for beginners
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-3">
            <a href="details.html">
                <div class="card">
                        <img src="pics/software_engineering_rajib_mall.png">
                    <div class="card-header">
                        <h3 class="card-title">Fundaments of Software Engineering</h3>
                        Author- Rajib Mall<br>
                    </div>
                    <div class="card-body d-none d-sm-block">
                        A book on software engineering fundamentals for beginners
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-3">
            <a href="details.html">
                <div class="card">
                        <img src="pics/software_engineering_rajib_mall.png">
                    <div class="card-header">
                        <h3 class="card-title">Fundaments of Software Engineering</h3>
                        Author- Rajib Mall<br>
                    </div>
                    <div class="card-body d-none d-sm-block">
                        A book on software engineering fundamentals for beginners
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-3">
            <a href="details.html">
                <div class="card">
                        <img src="pics/software_engineering_rajib_mall.png">
                    <div class="card-header">
                        <h3 class="card-title">Fundaments of Software Engineering</h3>
                        Author- Rajib Mall<br>
                    </div>
                    <div class="card-body d-none d-sm-block">
                        A book on software engineering fundamentals for beginners
                    </div>
                </div>
            </a>
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