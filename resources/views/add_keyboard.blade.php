@extends('layouts.layout')

@section('title', 'Add Keyboard')
    
@section('content')
    @if (Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <form method="post" action="/addKeyboard" class="box bg-light shadow py-3 rounded-2" enctype="multipart/form-data">
        @csrf
        <div class="mx-4">
            <h4>Add Keyboard</h4>
        </div>
        <hr class="text-primary">
        <div class="px-4 mx-4">
            <div class="row g-5 align-items-center mb-3 mx-5">
                <div class="col-4 text-end">
                    <label class="form-label">Category</label>
                </div>
                <div class="col-8">
                    <select class="form-select" aria-label="Default select example" name="category">
                        <option value="" selected>Choose a category</option>
                        @foreach ($categories as $c)
                            <option value="{{ $c->id }}">{{ $c->name }}</option>
                        @endforeach
                    </select>
                    @if($errors->first('category'))
                        <span class="text-danger">{{ $errors->first('category') }}</span>
                    @endif
                </div>
            </div>
            <div class="row g-5 align-items-center mb-3 mx-5">
                <div class="col-4 text-end">
                    <label for="txtName" class="form-label">Keyboard Name</label>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control" id="txtName" name="name" value="{{ old('name') }}">
                    @if($errors->first('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
            </div>
            <div class="row g-5 align-items-center mb-3 mx-5">
                <div class="col-4 text-end">
                    <label for="txtPrice" class="form-label">Keyboard Price (USD)</label>
                </div>
                <div class="col-8">
                    <input type="number" class="form-control" id="txtPrice" name="price" value="{{ old('price') }}">
                    @if($errors->first('price'))
                        <span class="text-danger">{{ $errors->first('price') }}</span>
                    @endif
                </div>
            </div>
            <div class="row g-5 align-items-center mb-3 mx-5">
                <div class="col-4 text-end">
                    <label for="txtDescription" class="form-label">Description</label>
                </div>
                <div class="col-8">
                    <textarea class="form-control" id="txtDescription" name="description" rows="5">{{ old('description') }}</textarea>
                    @if($errors->first('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
                </div>
            </div>
            <div class="row g-5 align-items-center mb-3 mx-5">
                <div class="col-4 text-end">
                    <label for="fileImage" class="form-label">Keyboard Image</label>
                </div>
                <div class="col-8">
                    <input class="form-control" type="file" id="fileImage" name="image">
                    @if($errors->first('image'))
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                    @endif
                </div>
            </div>
            <div class="row g-5 align-items-center mx-5">
                <div class="col-4">
                    
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </form>
@endsection