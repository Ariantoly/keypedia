@extends('layouts.layout')

@section('title', 'Login')
    
@section('content')
    <form method="post" action="/login" class="box bg-light shadow py-3 rounded-2">
        @csrf
        <div class="mx-4">
            <h4>Login</h4>
        </div>
        <hr class="text-primary">
        <div class="px-4 mx-4">
            <div class="row gx-5 align-items-center mb-3 mx-5">
                <div class="col-4 text-end">
                    <label for="txtEmail" class="form-label">E-Mail Address</label>
                </div>
                <div class="col-8">
                    <input type="email" class="form-control" id="txtEmail" name="email">
                </div>
            </div>
            <div class="row gx-5 align-items-center mb-3 mx-5">
                <div class="col-4 text-end">
                    <label for="txtPassword" class="form-label">Password</label>
                </div>
                <div class="col-8">
                    <input type="password" class="form-control" id="txtPassword" name="password">
                </div>
            </div>
            <div class="row gx-5 align-items-center mb-3 mx-5">
                <div class="col-4">
                    
                </div>
                <div class="col-auto">
                    <div>
                        <input type="checkbox" class="form-check-input" id="chkRemember" name="remember">
                        <label class="form-check-label" for="chkRemember">Remember Me</label>
                    </div>
                </div>
            </div>
            <div class="row gx-5 align-items-center mx-5">
                <div class="col-4">
                    
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
        </div>
    </form>
@endsection