@extends('layouts.layout')

@section('title', 'Transaction History')

@section('content')
    <p class="fs-1 text-center">Your Transaction History</p>

    <div class="d-flex justify-content-center flex-column mt-5">
        <a class="btn btn-light mb-3 px-5" href="/transactionDetail" role="button">Transaction at 2021-06-01 12:41:28</a>
        <a class="btn btn-light mb-3 px-5" href="/transactionDetail" role="button">Transaction at 2021-06-01 12:41:28</a>
    </div>

@endsection