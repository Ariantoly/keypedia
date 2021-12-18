@extends('layouts.layout')

@section('title', 'Detail Keyboard')

@section('content')
    <div class="box bg-light shadow py-3 rounded-2">
        <div class="mx-4">
            <h4>Detail Keyboard</h4>
        </div>
        <hr class="text-primary">
        <div class="d-flex mx-4">
            <div class="me-4">
                <img src="{{ Storage::url($keyboard->image) }}" alt="Keyboard" class="img-small">
            </div>
            <div>
                <p class="fs-4 fw-bold">{{ $keyboard->name }}</p>
                <p>$ {{ $keyboard->price }}</p>
                <p>{{ $keyboard->description }}</p>
                @auth
                    @if (strcmp(Auth::user()->role->name, 'Customer') == 0)
                        <div class="d-flex justify-content-center">
                            <form action="/addCart/{{ $keyboard->id }}" method="post">
                                @csrf
                                <div class="row gx-5 align-items-center mb-3 mx-4">
                                    <div class="col-3 text-end">
                                        <label for="txtQty" class="form-label">Quantity</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="number" class="form-control" id="txtQty" name="qty">
                                        @if($errors->first('qty'))
                                            <span class="text-danger">{{ $errors->first('qty') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row g-5 align-items-center mx-4">
                                    <div class="col-3">
                                        
                                    </div>
                                    <div class="col-9">
                                        <button type="submit" class="btn btn-primary">Add to cart</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endif
                @else
                    <div class="d-flex justify-content-center">
                        <form action="/addCart/{{ $keyboard->id }}" method="post">
                            @csrf
                            <div class="row gx-5 align-items-center mb-3 mx-4">
                                <div class="col-3 text-end">
                                    <label for="txtQty" class="form-label">Quantity</label>
                                </div>
                                <div class="col-9">
                                    <input type="number" class="form-control" id="txtQty" name="qty">
                                </div>
                            </div>
                            <div class="row g-5 align-items-center mx-4">
                                <div class="col-3">
                                    
                                </div>
                                <div class="col-9">
                                    <button type="submit" class="btn btn-primary">Add to cart</button>
                                </div>
                            </div>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection