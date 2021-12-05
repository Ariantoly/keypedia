@extends('layouts.layout')

@section('title', 'Update Keyboard')

@section('content')
    <div class="box bg-light shadow py-3 rounded-2">
        <div class="mx-4">
            <h4>Update Keyboard</h4>
        </div>
        <hr class="text-primary">
        <div class="d-flex mx-4">
            <div class="me-2">
                <img src="images/keyboard.jpg" alt="Keyboard" class="img-small">
            </div>
            <div>
                <form action="/updateKeyboard" method="post">
                    @csrf
                    @method('put')
                    <div class="row gx-4 align-items-center mb-3">
                        <div class="col-5 text-end">
                            <label class="form-label">Category</label>
                        </div>
                        <div class="col-7">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Choose a category</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="row gx-4 align-items-center mb-3">
                        <div class="col-5 text-end">
                            <label for="txtName" class="form-label">Keyboard Name</label>
                        </div>
                        <div class="col-7">
                            <input type="text" class="form-control" id="txtName" name="name">
                        </div>
                    </div>
                    <div class="row gx-4 align-items-center mb-3">
                        <div class="col-5 text-end">
                            <label for="txtPrice" class="form-label">Keyboard Price (USD)</label>
                        </div>
                        <div class="col-7">
                            <input type="number" class="form-control" id="txtPrice" name="price">
                        </div>
                    </div>
                    <div class="row gx-4 align-items-center mb-3">
                        <div class="col-5 text-end">
                            <label for="txtDescription" class="form-label">Description</label>
                        </div>
                        <div class="col-7">
                            <textarea class="form-control" id="txtDescription" name="description" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row gx-4 align-items-center mb-3">
                        <div class="col-5 text-end">
                            <label for="fileImage" class="form-label">Keyboard Image</label>
                        </div>
                        <div class="col-7">
                            <input class="form-control" type="file" id="fileImage" name="image">
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