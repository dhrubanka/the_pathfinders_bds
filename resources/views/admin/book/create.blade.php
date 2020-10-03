@extends('admin.layout.app')

@section('title', 'Create book')



@section('content')
    <div class="row" style="margin: 2em;">
    <div class="col-12 col-sm-8 offset-sm-2">
        <div class="card col-10 offset-sm-1">
            <h3 class="class-header m-3 text-center"><b>Create a new book entry</b></h3>
            <form method="POST" action="/book/store" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="InputName" class="col-md-2 col-form-label">Book Name</label>
                    <div class="col-md-10">
                        <input type="text"
                               class="form-control @error('name') is-invalid  @enderror"
                               id="InputName"
                               name="name"
                               placeholder="Enter Book Name"
                               value="{{ old('name') }}" >
                     </div>
                     @error('name')
                        <p class="text-danger" >{{ $errors->first('name')}}</p>
                     @enderror
                </div>

                <div class="form-group row">
                    <label for="InputAuName" class="col-md-2 col-form-label">Author Name</label>
                    <div class="col-md-10">
                        <input type="text"
                               class="form-control @error('author_name') is-invalid  @enderror"
                               id="InputAuName"
                               name="author_name"
                               placeholder="Enter Author"
                               value="{{ old('author_name') }}" >
                     </div>
                     @error('author_name')
                        <p class="text-danger" >{{ $errors->first('author_name')}}</p>
                     @enderror
                </div>

                <div class="form-group row">
                    <label for="InputCat" class="col-md-2 col-form-label">Category</label>
                    <div class="col-md-10">
                        <input type="text"
                               class="form-control @error('category') is-invalid  @enderror"
                               id="InputCat"
                               name="category"
                               placeholder="Enter Category"
                               value="{{ old('category') }}" >
                     </div>
                     @error('category')
                        <p class="text-danger" >{{ $errors->first('category')}}</p>
                     @enderror
                </div>

                <div class="form-group row">
                    <label for="Inputsub" class="col-md-2 col-form-label">Sub Category</label>
                    <div class="col-md-10">
                        <input type="text"
                               class="form-control @error('sub_category') is-invalid  @enderror"
                               id="Inputsub"
                               name="sub_category"
                               placeholder="Enter Sub Category"
                               value="{{ old('category') }}" >
                     </div>
                     @error('sub_category')
                        <p class="text-danger" >{{ $errors->first('sub_category')}}</p>
                     @enderror
                </div>
                <div class="form-group row">
                    <label for="InputStock" class="col-md-2 col-form-label">Book Stock </label>
                    <div class="col-md-10">
                        <input type="text"
                               class="form-control @error('stock') is-invalid  @enderror"
                               id="InputStock"
                               name="stock"
                               placeholder="Enter Stock"
                               value="{{ old('stock') }}" >
                     </div>
                     @error('stock')
                        <p class="text-danger" >{{ $errors->first('stock')}}</p>
                     @enderror
                </div>
                

                <div class="form-group row">
                    <label for="description" class="col-md-2 col-form-label">Description</label>
                        <div class="col-md-10">
                            <textarea class="form-control"
                                      id="description"
                                      name="description"
                                      rows="12">
                            </textarea>
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
