@extends('layouts.layout')

@section('title', 'Transaction History')

@section('content')
    <p class="fs-1 text-center">Your Transaction History</p>

    <div class="d-flex justify-content-center flex-column mt-5">
        @if (sizeof($transactions) == 0)
            <p class="p-2 mx-3 bg-light rounded-2">No transaction</p>
        @endif
        @foreach ($transactions as $t)
            <a class="btn btn-light mb-3 px-5" href="/transaction/{{ $t->id }}" role="button">Transaction at {{ $t->date }}</a>
        @endforeach
    </div>

@endsection