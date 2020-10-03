@extends('layouts.app')

@section('content')
<header class="jumbotron" style="margin-top: -1.5em" >
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
            <li class="breadcrumb-item"><a href="book_home.html">Home</a></li>
            <li class="breadcrumb-item active"><a href="#">Contact Us</a></li>
        </ol>
        <div class="col-12">
            <h3>Contact Us</h3>
            <hr>
         </div>
    </div>
    <div class="row row-content">
        <div class="col-12">
           <h3>Location Information</h3>
        </div>
        <div class="col-12 offset-sm-1 col-sm-4">
            <h5>Our Address</h5>
            <address style="font-size: 100%">
            Tezpur University<br>
            Napaam, Tezpur<br>
            Sonitpur<br>
            Assam<br>
            Pin-784028<br>
            India<br>                          
            </address>
        </div>
        <div class="col-12 offset-sm-2 col-sm-4">
            <h5>Contact Details</h5>
            <a role="button" class="btn btn-primary col-sm-6" href="tel:1234567890"><i class="fa fa-phone"></i> Call: 1234567890</a>
            <a role="button" class="btn btn-success" href="mailto:dc10raven@gmail.com"><i class="fa fa-envelope-o"></i> Email</a><br><br>
            <a role="button" class="btn btn-primary col-sm-6" href="tel:1234567890"><i class="fa fa-phone"></i> Call: 1234567890</a>
            <a role="button" class="btn btn-success" href="mailto:dc10raven@gmail.com"><i class="fa fa-envelope-o"></i> Email</a><br><br>
            <a role="button" class="btn btn-primary col-sm-6" href="tel:1234567890"><i class="fa fa-phone"></i> Call: 1234567890</a>
            <a role="button" class="btn btn-success" href="mailto:dc10raven@gmail.com"><i class="fa fa-envelope-o"></i> Email</a><br><br>
        </div>
    </div>
    <div class="row row-content">
        <div class="col-12 offset-sm-2 col-sm-8">
            <div class="card" id="card2">
                <div class="card-header">
                    <h3 class="card-title">Send us your Feedback</h3>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group row">
                            <label for="firstname" class="col-12 col-sm-3 col-form-label">First Name</label>
                            <div class="col-12 col-sm-9">
                                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastname" class="col-12 col-sm-3 col-form-label">Last Name</label>
                            <div class="col-12 col-sm-9">
                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-12 col-sm-3 col-form-label">Phone</label>
                            <div class="col-12 col-sm-9">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="emailid" class="col-12 col-sm-3 col-form-label">Email</label>
                            <div class="col-12 col-sm-9">
                                <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="feedback" class="col-12 col-sm-3 col-form-label">Your Feedback</label>
                            <div class="col-12 col-sm-9">
                                <textarea class="form-control" id="feedback" name="feedback" rows="8"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-primary">Send Feedback</button>
                            </div> 
                        </div>
                    </form>
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
                    <li><a href="book_home.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
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