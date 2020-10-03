@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-content">
        <ol class="col-12 breadcrumb">
            <li class="breadcrumb-item"><a href="book_home.html">Home</a></li>
            <li class="breadcrumb-item active"><a href="#">Book Details</a></li>
        </ol>
    </div>
    <div class="row-header">
        <div class="col-12">
            <h3>Book Details</h3>
        </div>
    </div>

    <div class="card" id="card1">
        <div class="row no-gutters">
            <div class="col-12 col-sm-6 text-center" >
                @if($book->image == NULL)
                <img src="{{asset("storage/img/default-book.png")}}"  style="height: 300px;">
           @else
               <img  src="{{asset("storage/".$book->image."" )}}">
           @endif
            </div>
            <div class="col-12 col-sm-6">
                <div class="card-body offset-sm-1 col-sm-10">
                <h3 class="card-title">{{$book->book_name}}</h3><br>
                    Author- {{$book->author_name}}<br><br><br>
                    <a class="btn btn-block btn-lg btn-primary" role="button" id="requestBtn"
                    data-whatever="{{ $book->id }}"
                     data-toggle="modal" data-target="#exampleModal">REQUEST BOOK</a>
                </div>
            </div>
        </div>    
    </div>
    <div class="card" id="card1">
        <div class="card-body">
            <div class="card-header">
                <h3 class="card-title offset-sm-1">Book Details</h3>
            </div>
            <div class="row no-gutters">                   
                <div class="col-12 offset-sm-1 col-sm-5">
                    Title- {{$book->book_name}}<br>
                    Author- {{$book->author_name}}<br>
                    Publication Year- 2014<br>
                </div>
                <div class="col-12 col-sm-5">
                    Category- Academic<br>
                    Sub Category- Computer Science<br>
                    Description- {{$book->description}}
                </div>
            </div>
        </div>    
    </div>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Select Your Address</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php  
                    $id = $book->id;
                    $address = App\Address::where('id', $id)->get();
                    //dd($address);
                    ?>
                    @if($address === NULL)
                    Your address list is empty <br>
                     <a href="" class="btn btn-danger">Confirm Your Request!</a> 
                    @else
                        Select your address : <br>
                        <form method="POST" action="/Profile/request/store" >
                            @csrf
                            
                            <input class="" name="book_id" value="{{$book->id}}">
                            <input class="" name="user_id" value="{{Auth::user()->id}}">
                            <input class="" name="status" value="pending">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">select</label>
                                <select class="form-control" name="address_id" id="exampleFormControlSelect1">
                                @foreach($address as $ad)
                                <option value="{{ $ad->id}}">{{ $ad->street}},{{ $ad->pin}}</option>
                                @endforeach
                                </select>

                            <button type="submit" id="submitrequest"class="btn btn-primary">Confirm</button>
                        </form>
                    @endif
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               
            </div>
        </div>
    </div>
</div>


@endsection