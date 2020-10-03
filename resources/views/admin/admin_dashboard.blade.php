@extends('admin.layout.app')

@section('content')
<div class="container-fluid">
    <div style="height: 50px"></div>
    <div class="row">
        <div class="col-sm">
            <div class="card text-center">
            <div class="card-header">
                People
            </div>
            <div class="card-body">
                <h5 class="card-title">Member</h5>
                <p class="card-text" style="font-size: 50px">{{ count($users) }}</p>
                <a href="" class="btn btn-primary">User Management</a>
            </div>
            </div>

            <div class="card text-center">
            <div class="card-header">
                Books
            </div>
            <div class="card-body">
                <h5 class="card-title">Book Collection</h5>
                <p class="card-text" style="font-size: 50px">{{ count($books) }}</p>
                <a href="{{ url("/book") }}" class="btn btn-primary">Book Management</a>
            </div>
            </div>
        </div>

        <div class="col-sm">
            <div class="card text-center">
            <div class="card-header">
                Donations
            </div>
            <div class="card-body">
                <h5 class="card-title">Donations</h5>
                <p class="card-text" style="font-size: 50px">#</p>
                <a href="" class="btn btn-primary">Donation Management</a>
            </div>
            </div>

            
        
        </div>

        <div class="col-sm">
            <div class="card text-center">
            <div class="card-header">
                Orders
            </div>
            <div class="card-body">
                <h5 class="card-title">Requests</h5>
                <p class="card-text" style="font-size: 50px">{{ count($orders) }}</p>
                <a href="{{ url("/order_index") }}" class="btn btn-primary">Order Management</a>
            </div>
            </div>

            <div class="card text-center">
            <div class="card-header">
                Feedbacks
            </div>
            <div class="card-body">
                <h5 class="card-title">Messages</h5>
                <p class="card-text" style="font-size: 50px">{{ count($feedbacks) }}</p>
                <a href="{{ url("/feedbacks") }}" class="btn btn-primary">Feedback Management</a>
            </div>
            </div>

        </div>
  </div>
</div>

@endsection