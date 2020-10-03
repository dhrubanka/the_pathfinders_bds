@extends('admin.layout.app')

@section('content')
<div class="container">
    <div class="row row-header">
        <div class="col-12">
            <h3 style="margin-top: 100px;">Request Details</h3>
        </div>
    </div>

    <div class="card" id="card1">
        <div class="row no-gutters">
            <div class="col-12 col-sm-4">
                @if($order->book->image == NULL)
                <img src="{{asset("storage/img/default-book.png")}}"  style="height: 300px;">
           @else
               <img  src="{{asset("storage/".$order->book->image."" )}}">
           @endif
            </div>
            <div class="col-12 col-sm-8">
                <div class="card-body">
                    <div class="row" style="margin-top: 20px;">
                        <div class="offset-sm-1 col-sm-3">
                            Book Name:
                        </div>
                        <div class="col-sm-7">
                            {{ $order->book->book_name }}
                        </div>
                        <div class="offset-sm-1 col-sm-3">
                            Author Name:
                        </div>
                        <div class="col-sm-7">
                            {{ $order->book->author_name }}
                        </div>
                        <br><br>
                        <b>Requested By: </b> <br><br>
                        <div class="offset-sm-1 col-sm-10">
                            Address : 
                        </div>
                        <div class="offset-sm-1 col-sm-3">
                            House no:
                        </div>
                        <div class="col-sm-7">
                            {{ $order->address->street}}
                        </div>
                        <div class="offset-sm-1 col-sm-3">
                            Locality:
                        </div>
                        <div class="col-sm-7">
                            {{ $order->address->locality}}
                        </div>
                        <div class="offset-sm-1 col-sm-3">
                            State:
                        </div>
                        <div class="col-sm-7">
                            {{ $order->address->state}}
                        </div>
                        <div class="offset-sm-1 col-sm-3">
                           District:
                        </div>
                        <div class="col-sm-7">
                            {{ $order->address->district}}
                        </div>
                        <div class="offset-sm-1 col-sm-3">
                            Pin: 
                        </div>
                        <div class="col-sm-7">
                            {{ $order->address->pin}}
                        </div>
                        <div class="offset-sm-1 col-sm-3">
                            <h3>Status : </h3>
                        </div>
                        <div class="col-sm-7">
                            {{ $order->status}}
                        </div>
                        @if( $order->status == 'pending')
                        <a class="offset-sm-1 col-sm-10 btn btn-block btn-lg btn-primary" style="margin-top: 50px; color:white;" role="button" data-toggle="modal" data-target="#approvalModal">CHECK FOR APPROVAL</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <div class="modal fade" role="dialog" id="approvalModal" data-backdrop="static">
        <div class="modal-dialog" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">CHECKING FOR APPROVAL</h3>
                    <button type="button" class="close"  onclick="location.reload();" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <?php use Illuminate\Support\Facades\DB;
                        $book = App\Book::find($order->book->id); ?>
                        @if($book->stock) 
                            <?php App\Book::where('id', $order->book->id)->decrement('stock', 1);
                            App\Order::where('id', $order->id)->update(array('status'=> 'accepted'));  ?>
                            <h2>Approved ! </h2>
                        @else
                            <h2>Rejected !</h2>
                            @endif
                       
                    
                </div>
            </div>
        </div>
    </div>

</div>


@endsection