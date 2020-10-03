@extends('layouts.app')

@section('content')

<div class="container" style="margin-top: -5em">
    <div class="container">
        <div class="row row-header">
            <div class="col-12">
                <h3 style="margin-top: 100px;">User Profile</h3>
            </div>
        </div>

        <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-address-tab" data-toggle="pill" href="#pills-address" role="tab">ADDRESS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-order-tab" data-toggle="pill" href="#pills-order" role="tab">ORDER</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-donation-tab" data-toggle="pill" href="#pills-donation" role="tab">DONATION</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent" style="margin-bottom: 50px;">
            <div class="tab-pane fade show active" id="pills-address" role="tabpanel">
                <div class="card-body">
                    <a href="/profile/address/create" class="btn-danger btn" >Add address</a>
                    <div class="card" id="card2">
                        
                        <div class="row">
                            @foreach ($addresses as $address)
                                
                            
                            <div class="col-12 col-sm-8">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="offset-sm-1 col-sm-10">
                                            Address
                                        </div>
                                        <div class="offset-sm-1 col-sm-3">
                                            Street Name:
                                        </div>
                                        <div class="col-sm-7">
                                            {{ $address->street}}
                                        </div>
                                        <div class="offset-sm-1 col-sm-3">
                                            Locality:
                                        </div>
                                        <div class="col-sm-7">
                                            {{ $address->lcoality}}
                                        </div>
                                        <div class="offset-sm-1 col-sm-3">
                                            landmark:
                                        </div>
                                        <div class="col-sm-7">
                                            {{ $address->landmark}}
                                        </div>
                                        <div class="offset-sm-1 col-sm-3">
                                           District:
                                        </div>
                                        <div class="col-sm-7">
                                            {{ $address->district}}
                                        </div>
                                        <div class="offset-sm-1 col-sm-3">
                                            State: 
                                        </div>
                                        <div class="col-sm-7">
                                            {{ $address->state}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>    
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-order" role="tabpanel">
                <div class="card-body">
                    
                            @foreach ($orders as $order)
                                
                            <div class="card" id="card1">
                                <div class="row no-gutters">
                            <div class="col-12 col-sm-4">
                                @if($order->book->image == NULL)
                                <img src="{{asset("storage/img/default-book.png")}}"  style="height: 150px;">
                           @else
                               <img  src="{{asset("storage/".$order->book->image."" )}}">
                           @endif
                            </div>
                            <div class="col-12 col-sm-8">
                                <div class="card-body"  style="background: rgb(150, 173, 64)">
                                    <div class="row">
                                        <div class="offset-sm-1 col-sm-3">
                                            Book Name:
                                        </div>
                                        <div class="col-sm-7">
                                           {{ $order->book->book_name}}
                                        </div>
                                        <div class="offset-sm-1 col-sm-3">
                                            Author Name:
                                        </div>
                                        <div class="col-sm-7">
                                            {{ $order->book->author_name}}
                                        </div>
                                        <div class="offset-sm-1 col-sm-3">
                                            Publication Year:
                                        </div>
                                        <div class="col-sm-7">
                                            2014
                                        </div>
                                        <div class="offset-sm-1 col-sm-3">
                                            Category:
                                        </div>
                                        <div class="col-sm-7">
                                            {{ $order->book->category}}
                                        </div>
                                        <div class="offset-sm-1 col-sm-3">
                                            Status:
                                        </div>
                                        <div class="col-sm-7">
                                            {{ $order->status}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                            @endforeach
                        
                </div>
            </div>
            <div class="tab-pane fade" id="pills-donation" role="tabpanel">
                <div class="card-body">
                    <div class="card" id="card1">
                        <div class="row no-gutters">
                            <div class="col-12 col-sm-4">
                                <img src="pics/software_engineering_rajib_mall.png" style="max-height: 200px;">
                            </div>
                            <div class="col-12 col-sm-8">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="offset-sm-1 col-sm-3">
                                            Book Name:
                                        </div>
                                        <div class="col-sm-7">
                                            Fundamentals of Software Engineering
                                        </div>
                                        <div class="offset-sm-1 col-sm-3">
                                            Author Name:
                                        </div>
                                        <div class="col-sm-7">
                                            Mall
                                        </div>
                                        <div class="offset-sm-1 col-sm-3">
                                            Publication Year:
                                        </div>
                                        <div class="col-sm-7">
                                            2014
                                        </div>
                                        <div class="offset-sm-1 col-sm-3">
                                            Category:
                                        </div>
                                        <div class="col-sm-7">
                                            Academic
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

@endsection