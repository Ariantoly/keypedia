@extends('layouts.layout')

@section('title', $category->name)

@section('content')
    <p class="fs-1 text-center m-0 py-2 px-0 bg-light rounded-2">{{ $category->name }}</p>

    <form action="/category/keyboard/{{ $category->id }}"class="d-flex justify-content-center mt-4">
        <div class="col-10 pe-2">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="search">
        </div>
        <div class="col-1 pe-2">
            <select class="form-select" name="type"> 
                <option value="name" selected>Name</option>
                <option value="price">Price</option>
            </select>
        </div>
        <div class="col-auto">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>

    @if (Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
            {{ Session::get('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    <div class="mt-4">
        @if (sizeof($keyboards) == 0)
            <p class="p-2 mx-3 bg-light rounded-2">There is not any keyboard with this category</p>
        @else
            <div class="cards row row-cols-1 row-cols-md-3 g-5 justify-content-center py-4 mx-3">
                @foreach ($keyboards as $k)
                    <div class="col">
                        <a href="/keyboard/{{ $k->id }}" class="text-decoration-none">
                            <div class="card h-100 p-2 bg-light">
                                <div>
                                    <img src="{{ Storage::url($k->image) }}" class="card-img-top" alt="Keyboard">
                                    <div class="card-body mb-4">
                                        <h5 class="card-title text-center text-decoration-none">{{ $k->name }}</h5>
                                        <p class="card-text text-center text-black">US$ {{ $k->price }}</p>
                                    </div>
                                    @auth
                                        @if (strcmp(Auth::user()->role->name, 'Manager') == 0)
                                            <div class="d-flex justify-content-evenly mb-3">
                                                <form action="/deleteKeyboard/{{ $k->id }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-primary">Delete Keyboard</button>
                                                </form>
                                                <form action="/updateKeyboard/{{ $k->id }}" method="get">
                                                    <button class="btn btn-primary">Update Keyboard</button>
                                                </form>
                                            </div>
                                        @endif
                                    @endauth
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-end">
                {{ $keyboards->links() }}
            </div>

        @endif
    </div>
@endsection