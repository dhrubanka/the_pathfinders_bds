@extends('admin.layout.app')

@section('content')
<div class="container">
    <div style="height: 150px"></div>
    <div class="card">
        <div class="card-header">
            {{ $msg->name }} says....
        </div>
        <div class="card-body">
            <h5 class="card-text">{{ $msg->message }}</h5>
        <a href="{{ url("feedbacks/$msg->id") }}" class="btn btn-danger">Delete</a>
        </div>
    </div>

    

    
</div>

@endsection