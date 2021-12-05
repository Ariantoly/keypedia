@extends('layouts.layout')

@section('title', 'Add Keyboard')
    
@section('content')
    <form method="post" action="/addKeyboard" class="box bg-light shadow py-3 rounded-2">
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
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Choose a category</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="row g-5 align-items-center mb-3 mx-5">
                <div class="col-4 text-end">
                    <label for="txtName" class="form-label">Keyboard Name</label>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control" id="txtName" name="name">
                </div>
            </div>
            <div class="row g-5 align-items-center mb-3 mx-5">
                <div class="col-4 text-end">
                    <label for="txtPrice" class="form-label">Keyboard Price (USD)</label>
                </div>
                <div class="col-8">
                    <input type="number" class="form-control" id="txtPrice" name="price">
                </div>
            </div>
            <div class="row g-5 align-items-center mb-3 mx-5">
                <div class="col-4 text-end">
                    <label for="txtDescription" class="form-label">Description</label>
                </div>
                <div class="col-8">
                    <textarea class="form-control" id="txtDescription" name="description" rows="5"></textarea>
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