@extends('layouts.layout')

@section('title', 'Register')
    
@section('content')
    <form method="post" action="/register" class="box bg-light shadow py-3 rounded-2">
        @csrf
        <div class="mx-4">
            <h4>Register</h4>
        </div>
        <hr class="text-primary">
        <div class="px-4 mx-4">
            <div class="row gx-5 align-items-center mb-3 mx-5">
                <div class="col-4 text-end">
                    <label for="txtUsername" class="form-label">Username</label>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control" id="txtUsername" name="username" value="{{ old('username') }}">
                    @if($errors->first('username'))
                        <span class="text-danger">{{ $errors->first('username') }}</span>
                    @endif
                </div>
            </div>
            <div class="row gx-5 align-items-center mb-3 mx-5">
                <div class="col-4 text-end">
                    <label for="txtEmail" class="form-label">E-Mail Address</label>
                </div>
                <div class="col-8">
                    <input type="email" class="form-control col-auto" id="txtEmail" name="email" value="{{ old('email') }}">
                    @if($errors->first('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>
            <div class="row gx-5 align-items-center mb-3 mx-5">
                <div class="col-4 text-end">
                    <label for="txtPassword" class="form-label">Password</label>
                </div>
                <div class="col-8">
                    <input type="password" class="form-control" id="txtPassword" name="password" value="{{ old('password') }}">
                    @if($errors->first('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
            </div>
            <div class="row gx-5 align-items-center mb-3 mx-5">
                <div class="col-4 text-end">
                    <label for="txtConfPass" class="form-label">Confirm Password</label>
                </div>
                <div class="col-8">
                    <input type="password" class="form-control" id="txtConfPass" name="password_confirmation" value="{{ old('password_confirmation') }}">
                    @if($errors->first('password_confirmation'))
                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                </div>
            </div>
            <div class="row gx-5 align-items-center mb-3 mx-5">
                <div class="col-4 text-end">
                    <label for="txtAddress" class="form-label">Address</label>
                </div>
                <div class="col-8">
                    <textarea class="form-control" id="txtAddress" name="address">{{ old('address') }}</textarea>
                    @if($errors->first('address'))
                        <span class="text-danger">{{ $errors->first('address') }}</span>
                    @endif
                </div>
            </div>
            <div class="row gx-5 align-items-center mb-3 mx-5">
                <div class="col-4 text-end">
                    <label for="rbtGender" class="form-label">Gender</label>
                </div>
                <div class="col-8">
                    <div class="d-flex flex-row">
                        <div class="form-check me-3">
                                <input class="form-check-input" type="radio" name="gender" id="rbtMale" value="Male">
                                <label class="form-check-label" for="rbtMale">
                                Male
                                </label>
                        </div>
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="rbtFemale" value="Female">
                                <label class="form-check-label" for="rbtFemale">
                                Female
                                </label>
                        </div>
                    </div>
                    @if($errors->first('gender'))
                        <span class="text-danger">{{ $errors->first('gender') }}</span>
                    @endif
                </div>
            </div>
            <div class="row gx-5 align-items-center mb-3 mx-5">
                <div class="col-4 text-end">
                    <label for="txtdob" class="form-label">Date of Birth</label>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control" id="txtdob" name="dob" placeholder="2021-06-01" value="{{ old('dob') }}">
                    @if($errors->first('dob'))
                        <span class="text-danger">{{ $errors->first('dob') }}</span>
                    @endif
                </div>
            </div>
            <div class="row gx-5 align-items-center mx-5">
                <div class="col-4">
                    
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </div>
        </div>
    </form>
@endsection