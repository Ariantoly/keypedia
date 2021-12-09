@extends('layouts.layout')

@section('title', 'Add Keyboard')
    
@section('content')
    <form method="post" action="/addKeyboard" class="box bg-light shadow py-3 rounded-2" enctype="multipart/form-data">
        @csrf
        <div class="mx-4">
            <h4>Add Keyboard</h4>
        </div>
        <hr class="text-primary">
        <div class="px-4 mx-4">
            <div class="row g-5 align-items-center mb-3 mx-5">
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <span>{{ $errors->first('category') }}</span>
                    </div>
                @endif --}}
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
                        <div class="alert alert-danger mt-2 p-1">
                            {{ $errors->first('category') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="row g-5 align-items-center mb-3 mx-5">
                <div class="col-4 text-end">
                    <label for="txtName" class="form-label">Keyboard Name</label>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control" id="txtName" name="name">
                    @if($errors->first('name'))
                        <div class="alert alert-danger mt-2 p-1">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="row g-5 align-items-center mb-3 mx-5">
                <div class="col-4 text-end">
                    <label for="txtPrice" class="form-label">Keyboard Price (USD)</label>
                </div>
                <div class="col-8">
                    <input type="number" class="form-control" id="txtPrice" name="price">
                    @if($errors->first('price'))
                        <div class="alert alert-danger mt-2 p-1">
                            {{ $errors->first('price') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="row g-5 align-items-center mb-3 mx-5">
                <div class="col-4 text-end">
                    <label for="txtDescription" class="form-label">Description</label>
                </div>
                <div class="col-8">
                    <textarea class="form-control" id="txtDescription" name="description" rows="5"></textarea>
                    @if($errors->first('description'))
                        <div class="alert alert-danger mt-2 p-1">
                            {{ $errors->first('description') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="row g-5 align-items-center mb-3 mx-5">
                <div class="col-4 text-end">
                    <label for="fileImage" class="form-label">Keyboard Image</label>
                </div>
                <div class="col-8">
                    <input class="form-control" type="file" id="fileImage" name="image">
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