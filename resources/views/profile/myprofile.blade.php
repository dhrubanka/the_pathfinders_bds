@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    
                   
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
<div class="container row">
<div class="col"><a href="{{route('profile-address')}}" class="btn">Add address</a></div>
    <div class="col">
        <div class="card">
            
            <div class="card-body">
                <h4 class="card-title">Address</h4>
                <p class="card-text">Text</p>
            </div>
        </div>
    </div>
</div>
@endsection