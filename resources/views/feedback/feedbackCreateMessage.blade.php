@extends('admin.layout.app')

@section('content')
<div class="container">
    <form>
        <div class="form-group row">
            <label for="firstname" class="col-12 col-sm-3 col-form-label">Name</label>
            <div class="col-12 col-sm-9">
                <input type="text"
                               class="form-control @error('name') is-invalid  @enderror"
                               id="InputName"
                               name="name"
                               placeholder="Enter Category"
                               value="{{ old('name') }}" >
            </div>
        </div>
        <div class="form-group row">
            <label for="lastname" class="col-12 col-sm-3 col-form-label">Email</label>
            <div class="col-12 col-sm-9">
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="phone" class="col-12 col-sm-3 col-form-label">Phone Number</label>
            <div class="col-12 col-sm-9">
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
            </div>
        </div>
        <div class="form-group row">
            <label for="emailid" class="col-12 col-sm-3 col-form-label">Organization</label>
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

@endsection