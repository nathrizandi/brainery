@extends('admin.layout.layout')

@section("PageTitle", "Admin - Profile")
@section("NavbarTitle", "Profile")
@section('ProfileActive', "active")

@section('Content')

<div class="d-flex flex-column pt-4 px-3 gap-5 w-100">
    <div class="d-flex flex-column w-100 ps-4">
        <h5 class="profile-h5">Change Username</h5>
        <hr class="hr">
        <div class="row align-items-end gy-3">
            <div class="col-10">
                <label for="changeUsername" class="form-label">Username</label>
                <input class="form-control" id="changeUsername" type="text" aria-label="Change Username">
            </div>
            <div class="col-auto">
                <button class="btn btn-primary btn-profile">Change Username</button>
            </div>
        </div>
    </div>

    <div class="d-flex flex-column w-100 ps-4">
        <h5 class="profile-h5">Change Password</h5>
        <hr class="hr">
        <div class="row align-items-end gy-3">
            <div class="col-10">
                <label for="changePassword" class="form-label">New Password</label>
                <input class="form-control" id="changePassword" type="text" aria-label="Change Password">
            </div>
        </div>
        <span style="height: 1px, back"></span>
        <div class="row align-items-end gy-3">
            <div class="col-10">
                <label for="changePassword" class="form-label">Confirm Password</label>
                <input class="form-control" id="changePassword" type="text" aria-label="Change Password">
            </div>
            <div class="col-auto">
                <button class="btn btn-primary btn-profile">Change Password</button>
            </div>
        </div>
    </div>

    <div class="d-flex flex-column w-100 ps-4">
        <h5 class="profile-h5">Change Email</h5>
        <hr class="hr">
        <div class="row align-items-end gy-3">
            <div class="col-10">
                <label for="changeEmail" class="form-label">Email</label>
                <input class="form-control" id="changeEmail" type="text" aria-label="Change Email">
            </div>
            <div class="col-auto">
                <button class="btn btn-primary btn-profile">Change Email</button>
            </div>
        </div>
    </div>
</div>

@endsection