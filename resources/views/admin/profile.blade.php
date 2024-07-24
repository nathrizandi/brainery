@extends('admin.layout.layout')

@section("PageTitle", "Admin - Profile")
@section("NavbarTitle", "Profile")
@section('ProfileActive', "active")

@section('Content')

<div class="d-flex flex-column pt-4 px-3 gap-5 w-100">
    <form action="{{ route('admin.changeUsername') }}" method="POST" class="d-flex flex-column w-100 ps-4">
        @csrf
        <h5 class="profile-h5">Change Username</h5>
        <hr class="hr">
        <div class="row align-items-end gy-3">
            <div class="col-10">
                <label for="changeUsername" class="form-label">Username</label>
                <input class="form-control" id="changeUsername" name="username" type="text" aria-label="Change Username">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary btn-profile">Change Username</button>
            </div>
        </div>
    </form>

    <form action="{{ route('admin.changePassword') }}" method="POST" class="d-flex flex-column w-100 ps-4">
        @csrf
        <h5 class="profile-h5">Change Password</h5>
        <hr class="hr">
        <div class="row align-items-end gy-3">
            <div class="col-10">
                <label for="changePassword" class="form-label">New Password</label>
                <input class="form-control" id="changePassword" name="password" type="password" aria-label="Change Password">
            </div>
        </div>
        <span style="height: 1px, back"></span>
        <div class="row align-items-end gy-3">
            <div class="col-10">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input class="form-control" id="confirmPassword" name="confirmPassword" type="password" aria-label="Confirm Password">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary btn-profile">Change Password</button>
            </div>
        </div>
    </form>

    <form action="{{ route('admin.changeEmail') }}" method="POST" class="d-flex flex-column w-100 ps-4">
        @csrf
        <h5 class="profile-h5">Change Email</h5>
        <hr class="hr">
        <div class="row align-items-end gy-3">
            <div class="col-10">
                <label for="changeEmail" class="form-label">Email</label>
                <input class="form-control" id="changeEmail" name="email" type="email" aria-label="Change Email">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary btn-profile">Change Email</button>
            </div>
        </div>
    </form>
</div>

@endsection
