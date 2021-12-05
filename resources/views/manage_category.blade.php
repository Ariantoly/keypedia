@extends('layouts.layout')

@section('title', 'Manage Category')

@section('content')
    <p class="fs-1 text-center m-0 py-2 px-0 bg-light">Manage Categories</p>
    
    <div class="mt-4">
        <div class="cards row row-cols-1 row-cols-md-3 g-5 justify-content-center pt-4 mx-3">
            <div class="col">
                <a href="/keyboard" class="text-decoration-none">
                    <div class="card h-100 p-2 bg-light">
                        <div>
                            <img src="/images/keyboard.jpg" class="card-img-top" alt="Keyboard">
                            <div class="card-body mb-2">
                                <h5 class="card-title text-center text-decoration-none">87 Key Keyboard</h5>
                            </div>
                            <div class="d-flex justify-content-evenly mb-3">
                                <form action="/deleteCategory" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-primary">Delete Categories</button>
                                </form>
                                <form action="/updateCategory" method="get">
                                    <button class="btn btn-primary">Update Categories</button>
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
                            <div class="card-body mb-2">
                                <h5 class="card-title text-center text-decoration-none">87 Key Keyboard</h5>
                            </div>
                            <div class="d-flex justify-content-evenly mb-3">
                                <form action="/deleteCategory" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-primary">Delete Categories</button>
                                </form>
                                <form action="/updateCategory" method="get">
                                    <button class="btn btn-primary">Update Categories</button>
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
                            <div class="card-body mb-2">
                                <h5 class="card-title text-center text-decoration-none">87 Key Keyboard</h5>
                            </div>
                            <div class="d-flex justify-content-evenly mb-3">
                                <form action="/deleteCategory" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-primary">Delete Categories</button>
                                </form>
                                <form action="/updateCategory" method="get">
                                    <button class="btn btn-primary">Update Categories</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection