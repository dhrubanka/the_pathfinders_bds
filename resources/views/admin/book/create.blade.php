@extends('admin.layout.app')

@section('title', 'Create book')



@section('content')
    <div class="row" style="margin: 2em;">
    <div class="col-12 col-sm-8 offset-sm-2">
        <div class="card col-10 offset-sm-1">
            <h3 class="class-header m-3 text-center"><b>Create a new book entry</b></h3>
            <form method="POST" action="/category/store" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="InputName" class="col-md-2 col-form-label">Name</label>
                    <div class="col-md-10">
                        <input type="text"
                               class="form-control @error('name') is-invalid  @enderror"
                               id="InputName"
                               name="name"
                               placeholder="Enter Category"
                               value="{{ old('name') }}" >
                     </div>
                     @error('name')
                        <p class="text-danger" >{{ $errors->first('name')}}</p>
                     @enderror
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-2 col-form-label">Description</label>
                        <div class="col-md-10">
                            <textarea class="form-control"
                                      id="description"
                                      name="description"
                                      rows="12"></textarea>
                        </div>

                </div>
                <div class="form-group row">
                    <label for="file" class="col-md-2 col-form-label">Upload Product Display Image</label>
                    <input type="file" class="form-control-file col-md-4 @error('image') is-invalid  @enderror"
                           name="image"
                           id="File">
                    @error('image')
                    <p class="text-danger" >{{ $errors->first('image')}}</p>
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
