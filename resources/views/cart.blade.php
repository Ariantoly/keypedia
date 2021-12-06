@extends('layouts.layout')

@section('title', 'My Cart')

@section('content')
    <div class="box bg-light shadow py-3 rounded-2">
        <div class="mx-4">
            <h4>My Cart</h4>
        </div>
        <hr class="text-primary">
        <form action="/checkout" method="post" class="">
            @csrf
            <div class="d-flex mx-4 mb-4">
                <div class="me-4">
                    <img src="images/keyboard.jpg" alt="Keyboard" class="img-small">
                </div>
                <div class="mb-3">
                    <p class="fs-4 fw-bold">Game Key K87</p>
                    <p>Subtotal: $158</p>
                    <form action="/updateCart" method="post">
                        @csrf
                        @method('put')
                        <div class="row gx-5 align-items-center mb-3 mx-4">
                            <div class="col-3 text-end">
                                <label for="txtQty" class="form-label">Quantity</label>
                            </div>
                            <div class="col-9">
                                <input type="number" class="form-control" id="txtQty" name="qty">
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
            <div class="d-flex mx-4 mb-4">
                <div class="me-4">
                    <img src="images/keyboard.jpg" alt="Keyboard" class="img-small">
                </div>
                <div class="mb-3">
                    <p class="fs-4 fw-bold">Game Key K87</p>
                    <p>Subtotal: $158</p>
                    <form action="/updateCart" method="post">
                        @csrf
                        @method('put')
                        <div class="row gx-5 align-items-center mb-3 mx-4">
                            <div class="col-3 text-end">
                                <label for="txtQty" class="form-label">Quantity</label>
                            </div>
                            <div class="col-9">
                                <input type="number" class="form-control" id="txtQty" name="qty">
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
            <div class="d-flex justify-content-center mb-3">
                <button type="submit" class="btn btn-primary">Checkout</button>
            </div>
        </form>
    </div>
@endsection