@extends('layouts.layout')

@section('title', $category->name)

@section('content')
    <p class="fs-1 text-center m-0 py-2 px-0 bg-light rounded-2">{{ $category->name }}</p>

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
        @if ($category->keyboards == null)
            <p class="p-2 mx-3 fs-5 bg-light rounded-2">There is not any keyboard with this category</p>
        @else
            <div class="cards row row-cols-1 row-cols-md-3 g-5 justify-content-center pt-4 mx-3">
                @foreach ($category->keyboards as $k)
                    <div class="col">
                        <a href="/keyboard/{{ $k->id }}" class="text-decoration-none">
                            <div class="card h-100 p-2 bg-light">
                                <div>
                                    <img src="{{ Storage::url($k->image) }}" class="card-img-top" alt="Keyboard">
                                    <div class="card-body mb-4">
                                        <h5 class="card-title text-center text-decoration-none">{{ $k->name }}</h5>
                                        <p class="card-text text-center text-black">US$ {{ $k->price }}</p>
                                    </div>
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
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                {{-- <div class="col">
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
                </div> --}}
            </div>
        @endif
    </div>
@endsection