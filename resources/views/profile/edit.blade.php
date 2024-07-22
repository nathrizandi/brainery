@extends('/template/layout')

@section('title', 'Edit Profile')

@section('custom-csspage', '/css/edit-profile.css')

@section('content')
    <div class="profile-header">
        <h1>Public Profile</h1>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="profile-section">
                <h2 id="title" class="pb-1 text-orange">Change Username</h2>
                <hr class="hr" />
                <form action="{{ route('changeUsername') }}" method="POST">
                    @csrf
                    <div class="form-group pb-3">
                        <h3 for="username" id="subtitle" class="pb-2">Username</h3>
                        <input name="username" type="text" class="form-control form-control-custom" id="username"
                            class="pb-2" placeholder="Enter new username">
                    </div>
                    <button type="submit" class="btn btn-custom">Change Username</button>
                </form>
            </div>

            <div class="profile-section">
                <h2 class="text-orange" id="title">Change Password</h2>
                <hr class="hr">
                <form action="{{ route('changePassword') }}" method="POST">
                    @csrf
                    <div class="form-group pb-2">
                        <h3 for="new-password" id="subtitle" class="pb-2">New Password</h3>
                        <input name="password" type="password" class="form-control" id="new-password"
                            placeholder="Enter new password">
                    </div>
                    <div class="form-group pb-3 mt-3">
                        <h3 for="confirm-password" id="subtitle" class="pb-2">Confirm Password</>
                            <input name="confirmPassword" type="password" class="form-control" id="confirm-password"
                                placeholder="Confirm new password">
                    </div>
                    <button type="submit" class="btn btn-custom">Change Password</button>
                </form>
            </div>

            <div class="profile-section">
                <h2 class="text-orange" id="title">Change Email</h2>
                <hr class="hr">
                <form action="{{ route('changeEmail') }}" method="POST">
                    @csrf
                    <div class="form-group pb-3">
                        <h3 for="email" id="subtitle" class="pb-2">Email</h3>
                        <input name="email" type="email" class="form-control" id="email"
                            placeholder="Enter new email">
                    </div>
                    <button type="submit" class="btn btn-custom">Change Email</button>
                </form>
            </div>
        </div>

        <div class="col-md-4">
            <div class="profile-section text-center">
                <div class="profile-picture">
                    <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/icon/user.png?raw=true"
                        alt="Profile Picture">

                </div>
                <div class="profile-details mt-4">
                    {{-- <h5>jmk48</h5> --}}
                    <h5>{{ $user->username }}</h5>
                    {{-- <p>Abrahamjmk48@gmail.com</p> --}}
                    <p>{{ $user->email }}</p>
                    <a href="#" class="btn btn-danger">Delete Account</a>
                </div>
            </div>
        </div>
    </div>
@endsection
