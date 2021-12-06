@extends('layouts.layout')

@section('title', 'Transaction Detail')

@section('content')
    <p class="fs-1 text-center">Your Transaction History</p>

    <div class="d-flex justify-content-center flex-column mt-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Keyboard Image</th>
                    <th scope="col">Keyboard Name</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><img src="/images/keyboard.jpg" alt="Keyboard" class="img-mini"></th>
                    <td>AKKO 3061 World Tour Tokyo</td>
                    <td>$158</td>
                    <td>2</td>
                </tr>
                <tr>
                    <th scope="row"><img src="/images/keyboard.jpg" alt="Keyboard" class="img-mini"></th>
                    <td>AKKO 3061 World Tour Tokyo</td>
                    <td>$158</td>
                    <td>2</td>
                </tr>
            </tbody>
        </table>
    </div>

    <p class="fw-bold text-end">Total Price: $158</p>
@endsection