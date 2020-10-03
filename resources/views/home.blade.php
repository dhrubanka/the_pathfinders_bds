@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    
                    Debayan
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<header class="jumbotron">
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
    <div class="row row-header">
        <div class="col-12 col-sm-6">
            <span class="badge badge-pill bg-warning"><h3>POPULAR BOOKS</h3></span>
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
        </div>
        <div class="col-12 col-sm-3">
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
        </div>
        <div class="col-12 col-sm-3">
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
        </div>

    </div>
    <div class="row row-header">
        <div class="col-12 col-sm-6">
            <span class="badge badge-pill bg-warning"><h3>ACADEMIC BOOKS</h3></span>
        </div>
    </div>
    <div class="row row-content">
        <div class="col-12 col-sm-3">
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
        </div>
        <div class="col-12 col-sm-3">
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
        </div>
        <div class="col-12 col-sm-3">
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
        </div>
        <div class="col-12 col-sm-3">
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
        </div>

    </div>
    <div class="row row-header">
        <div class="col-12 col-sm-6">
            <span class="badge badge-pill bg-warning"><h3>NON ACADEMIC BOOKS</h3></span>
        </div>
    </div>
    <div class="row row-content">
        <div class="col-12 col-sm-3">
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
        </div>
        <div class="col-12 col-sm-3">
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
        </div>
        <div class="col-12 col-sm-3">
            <div class="card view overlay">
                    <img src="pics/software_engineering_rajib_mall.png">
                <div class="card-header">
                    <h3 class="card-title">Fundaments of Software Engineering</h3>
                    Author- Rajib Mall<br>
                </div>
                <div class="card-body d-none d-sm-block">
                    A book on software engineering fundamentals for beginners
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-3">
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
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 offset-sm-1 col-sm-4">
                <h4>Links</h4>
                <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
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

