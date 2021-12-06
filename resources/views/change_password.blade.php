@extends('layouts.layout')

@section('title', 'Change Password')
    
@section('content')
    <form method="post" action="/changePassword" class="box bg-light shadow py-3 rounded-2">
        @csrf
        <div class="mx-4">
            <h4>Change Password</h4>
        </div>
        <hr class="text-primary">
        <div class="px-4 mx-4">
            <div class="row gx-5 align-items-center mb-3 mx-5">
                <div class="col-5 text-end">
                    <label for="txtPassword" class="form-label">Current Password</label>
                </div>
                <div class="col-7">
                    <input type="password" class="form-control" id="txtPassword" name="password">
                </div>
            </div>
            <div class="row gx-5 align-items-center mb-3 mx-5">
                <div class="col-5 text-end">
                    <label for="txtNewPassword" class="form-label">New Password</label>
                </div>
                <div class="col-7">
                    <input type="password" class="form-control" id="txtNewPassword" name="newPassword">
                </div>
            </div>
            <div class="row gx-5 align-items-center mb-3 mx-5">
                <div class="col-5 text-end">
                    <label for="txtConfNewPassword" class="form-label">Confirm New Password</label>
                </div>
                <div class="col-7">
                    <input type="password" class="form-control" id="txtConfNewPassword" name="confNewPass">
                </div>
            </div>
            <div class="row gx-5 align-items-center mx-5">
                <div class="col-5">
                    
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Update Password</button>
                </div>
            </div>
        </div>
    </form>
@endsection