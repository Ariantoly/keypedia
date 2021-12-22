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
                @php
                    $total = 0;
                @endphp
                @foreach ($transactions as $t)
                    <tr>
                        <th scope="row"><img src="{{ Storage::url($t->keyboard->image) }}" alt="{{ $t->keyboard->name }}" class="img-mini"></th>
                        <td>{{ $t->keyboard->name }}</td>
                        <td>${{ $t->keyboard->price * $t->quantity }}</td>
                        <td>{{ $t->quantity }}</td>
                        @php
                            $total += $t->keyboard->price * $t->quantity;
                        @endphp
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <p class="fw-bold text-end">Total Price: ${{ $total }}</p>
@endsection