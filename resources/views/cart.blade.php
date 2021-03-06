@extends('layouts.layout')

@section('title', 'My Cart')

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
            {{ Session::get('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="box bg-light shadow py-3 rounded-2">
        <div class="mx-4">
            <h4>My Cart</h4>
        </div>
        <hr class="text-primary">
        @if (sizeof($cart->cartDetails) == 0)
            <p class="p-2 mx-3">No keyboard in the cart</p>
        @else
            @foreach ($cart->cartDetails as $c)
                <div class="d-flex mx-4 mb-4">
                    <div class="me-4">
                        <img src="{{ Storage::url($c->keyboard->image) }}" alt="{{ $c->keyboard->name }}" class="img-small">
                    </div>
                    <div class="mb-3">
                        <p class="fs-4 fw-bold">{{ $c->name }}</p>
                        <p>Subtotal: ${{ $c->keyboard->price * $c->quantity }}</p>
                        <form action="/updateCart/{{ $c->cart_id }}/keyboard/{{ $c->keyboard->id }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="row gx-5 align-items-center mb-3 mx-4">
                                <div class="col-3 text-end">
                                    <label for="txtQty" class="form-label">Quantity</label>
                                </div>
                                <div class="col-9">
                                    <input type="number" class="form-control" name="qty{{ $c->keyboard->id }}" value="{{ $c->quantity }}">
                                    @php
                                        $name = 'qty'.$c->keyboard->id;
                                    @endphp
                                    @if($errors->first($name))
                                        <span class="text-danger">{{ $errors->first($name) }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row gx-5 align-items-center mx-4">
                                <div class="col-3">
                                    
                                </div>
                                <div class="col-9">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
            <form action="/checkout" method="get">
                @csrf
                <div class="d-flex justify-content-center mb-3">
                    <button type="submit" class="btn btn-primary">Checkout</button>
                </div>
            </form>
        @endif
    </div>
@endsection