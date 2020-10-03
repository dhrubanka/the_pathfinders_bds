@extends('layouts.app')

@section('content')
<div class="row" style="margin: 2em;">
    <div class="col-12 col-sm-8 offset-sm-2">
        <div class="card col-10 offset-sm-1">
            <h3 class="class-header m-3 text-center"><b>Add a address </b></h3>
            <form method="POST" action="/ProfileController/address/store" enctype="multipart/form-data">
                @csrf
            <input class="d-none" name="user_id" value="{{Auth::user()->id}}">
                <div class="form-group row">
                    <label for="InputState" class="col-md-2 col-form-label">State</label>
                    <div class="col-md-10">
                        <input type="text"
                               class="form-control @error('state') is-invalid  @enderror"
                               id="InputState"
                               name="state"
                               placeholder="Enter your State"
                               value="{{ old('state') }}" >
                     </div>
                     @error('state')
                        <p class="text-danger" >{{ $errors->first('state')}}</p>
                     @enderror
                </div>

                <div class="form-group row">
                    <label for="InputDistrict" class="col-md-2 col-form-label">District</label>
                    <div class="col-md-10">
                        <input type="text"
                               class="form-control @error('district') is-invalid  @enderror"
                               id="InputDistrict"
                               name="district"
                               placeholder="Enter District"
                               value="{{ old('district') }}" >
                     </div>
                     @error('district')
                        <p class="text-danger" >{{ $errors->first('district')}}</p>
                     @enderror
                </div>

                <div class="form-group row">
                    <label for="street" class="col-md-2 col-form-label">Street</label>
                    <div class="col-md-10">
                        <input type="text"
                               class="form-control @error('street') is-invalid  @enderror"
                               id="street"
                               name="street"
                               placeholder="Enter street"
                               value="{{ old('street') }}" >
                     </div>
                     @error('street')
                        <p class="text-danger" >{{ $errors->first('street')}}</p>
                     @enderror
                </div>

                <div class="form-group row">
                    <label for="locality" class="col-md-2 col-form-label">Locality</label>
                    <div class="col-md-10">
                        <input type="text"
                               class="form-control @error('locality') is-invalid  @enderror"
                               id="locality"
                               name="locality"
                               placeholder="Enter locality"
                               value="{{ old('locality') }}" >
                     </div>
                     @error('locality')
                        <p class="text-danger" >{{ $errors->first('locality')}}</p>
                     @enderror
                </div>
                <div class="form-group row">
                    <label for="landmark" class="col-md-2 col-form-label">LandMark </label>
                    <div class="col-md-10">
                        <input type="text"
                               class="form-control @error('landmark') is-invalid  @enderror"
                               id="landmark"
                               name="landmark"
                               placeholder="Enter landmark"
                               value="{{ old('landmark') }}" >
                     </div>
                     @error('landmark')
                        <p class="text-danger" >{{ $errors->first('landmark')}}</p>
                     @enderror
                </div>
                <div class="form-group row">
                    <label for="pin" class="col-md-2 col-form-label">Pin </label>
                    <div class="col-md-10">
                        <input type="text"
                               class="form-control @error('pin') is-invalid  @enderror"
                               id="pin"
                               name="pin"
                               placeholder="Enter pin"
                               value="{{ old('pin') }}" >
                     </div>
                     @error('pin')
                        <p class="text-danger" >{{ $errors->first('pin')}}</p>
                     @enderror
                </div>

              

                <div class="text-center m-2">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
        </div>
        </div>
    </div>
@endsection