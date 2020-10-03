@extends('admin.layout.app')

@section('content')
<div class="container">
    <div style="height: 150px"></div>
    <h3>Order Table</h3>
    <small>All the listed orders shown here</small>
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Book Title</th>
            <th scope="col">User Address</th>
            <th scope="col">Status</th>
            <th scope="col"></th>
            <th scope="col"></th>
            </tr>
        </thead>
        
            @if(count($orders)>0)
                @foreach ($orders as $order)
            <tbody>
                <tr>
                    <td>{{ $order->user_id }}</td>
                    <td>{{ $order->book_id }}</td>
                    <td>{{ $order->address_id }}</td>
                    <td>{{ $order->status }}</td>
                    <td><a href="">delete request</a></td>
                    <td><a href="">process request</a></td>
                </tr>
                @endforeach
            </tbody>
            @else
                <p>No data available</p>
            @endif
            
        
        </table>

    
</div>

@endsection