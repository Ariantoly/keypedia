@extends('layouts.layout')

@section('title', 'Category')

@section('content')
    <p class="fs-1 text-center m-0 py-2 px-0 bg-light">Keyboard</p>

    <form class="d-flex justify-content-center mt-4">
        <div class="col-10 pe-2">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        </div>
        <div class="col-1 pe-2">
            <select class="form-select"> 
                <option value="1" selected>Name</option>
                <option value="2">Price</option>
            </select>
        </div>
        <div class="col-auto">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>
    
    <div class="mt-4">
        <div class="cards row row-cols-1 row-cols-md-3 g-5 justify-content-center pt-4 mx-3">
            <div class="col">
                <a href="/keyboard" class="text-decoration-none">
                    <div class="card h-100 p-2 bg-light">
                        <div>
                            <img src="/images/keyboard.jpg" class="card-img-top" alt="Keyboard">
                            <div class="card-body mb-4">
                                <h5 class="card-title text-center text-decoration-none">87 Key Keyboard</h5>
                                <p class="card-text text-center text-black">US$ 80</p>
                            </div>
                            <div class="d-flex justify-content-evenly mb-3">
                                <form action="/deleteKeyboard" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-primary">Delete Keyboard</button>
                                </form>
                                <form action="/updateKeyboard" method="get">
                                    <button class="btn btn-primary">Update Keyboard</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="/keyboard" class="text-decoration-none">
                    <div class="card h-100 p-2 bg-light">
                        <div>
                            <img src="/images/keyboard.jpg" class="card-img-top" alt="Keyboard">
                            <div class="card-body mb-4">
                                <h5 class="card-title text-center text-decoration-none">87 Key Keyboard</h5>
                                <p class="card-text text-center text-black">US$ 80</p>
                            </div>
                            <div class="d-flex justify-content-evenly mb-3">
                                <form action="/delete" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-primary">Delete Keyboard</button>
                                </form>
                                <form action="/update" method="post">
                                    @csrf
                                    @method('put')
                                    <button class="btn btn-primary">Update Keyboard</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="/keyboard" class="text-decoration-none">
                    <div class="card h-100 p-2 bg-light">
                        <div>
                            <img src="/images/keyboard.jpg" class="card-img-top" alt="Keyboard">
                            <div class="card-body mb-4">
                                <h5 class="card-title text-center text-decoration-none">87 Key Keyboard</h5>
                                <p class="card-text text-center text-black">US$ 80</p>
                            </div>
                            <div class="d-flex justify-content-evenly mb-3">
                                <form action="/deleteKeyboard" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-primary" type="submit">Delete Keyboard</button>
                                </form>
                                <form action="/updateKeyboard" method="post">
                                    @csrf
                                    @method('put')
                                    <button class="btn btn-primary" type="submit">Update Keyboard</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection