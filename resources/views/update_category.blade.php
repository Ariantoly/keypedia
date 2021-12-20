@extends('layouts.layout')

@section('title', 'Update Category')

@section('content')
    <div class="box bg-light shadow py-3 rounded-2">
        <div class="mx-4">
            <h4>Update Category</h4>
        </div>
        <hr class="text-primary">
        <div class="d-flex mx-4">
            <div class="me-2">
                <img src="{{ Storage::url($category->image) }}" alt="Keyboard" class="img-small">
            </div>
            <div>
                <form action="/updateCategory/{{ $category->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row gx-4 align-items-center mb-3">
                        <div class="col-5 text-end">
                            <label for="txtName" class="form-label">Category Name</label>
                        </div>
                        <div class="col-7">
                            <input type="text" class="form-control" id="txtName" name="name" value="{{ $category->name }}">
                            @if($errors->first('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row gx-4 align-items-center mb-3">
                        <div class="col-5 text-end">
                            <label for="fileImage" class="form-label">Category Image</label>
                        </div>
                        <div class="col-7">
                            <input class="form-control" type="file" id="fileImage" name="image">
                            @if($errors->first('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row gx-4 align-items-center">
                        <div class="col-5">
                            
                        </div>
                        <div class="col-7">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection