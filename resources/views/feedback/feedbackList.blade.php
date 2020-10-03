@extends('admin.layout.app')

@section('content')
<div class="container">
    <div style="height: 150px"></div>
    <h3>Feedback Table</h3>
    <small>All the feedbacks are shown here</small>
    <table class="table mt-2">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Name</th>
            <th scope="col">email</th>
            <th scope="col">phone</th>
            <th scope="col">Organization</th>
            <th scope="col"></th>
            <th scope="col"></th>
            </tr>
        </thead>
            @if(count($msg)>0)
                @foreach ($msg as $order)
            <tbody>
                <tr>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>{{ $order->organization }}</td>
                    <td><a href="{{ url("feedbacks/$order->id") }}">view message</a></td>
                    <td><a href="">delete</a></td>
                </tr>
                @endforeach
            </tbody>
            @else
                <p class="mt-3">No data available</p>
            @endif
          
        </table>

    
</div>

@endsection