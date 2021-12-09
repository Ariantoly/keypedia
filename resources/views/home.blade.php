@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    <p class="fs-1 text-center m-0 p-0">Welcome To Keypedia</p>
    <p class="text-center">Best Keyboard and Keycaps Shop</p>

    <div class="mt-4">
        <h3 class="text-center m-0 p-0">Categories</h3>
        <div class="cards row row-cols-1 row-cols-md-3 g-5 justify-content-center pt-4 mx-3">
            @foreach ($categories as $c)
                <div class="col">
                    <a href="/category/{{ $c->id }}" class="text-decoration-none">
                        <div class="card h-100 p-2 bg-light">
                            <div class="border border-primary rounded-2">
                                <div class="card-body">
                                    <h5 class="card-title text-center text-decoration-none">{{ $c->name }}</h5>
                                </div>
                                <img src="{{ $c->image }}" class="card-img-top" alt="Keyboard">
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection