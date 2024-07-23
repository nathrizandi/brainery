@extends('admin.layout.layout')

@section('PageTitle', 'Admin - Manage User')
@section('NavbarTitle', 'Manage User')
@section('UserActive', 'active')

@section('Content')
    <div class="card shadow-sm w-100 px-3">
        <div class="card-header d-flex justify-content-between pt-4 fs-5 fw-bold">
            Total Course ({{ $count }})
            <button type="button" class="btn btn-primary px-5" data-bs-toggle="modal"
                data-bs-target="#CreateUser">Create</button>
        </div>
        <div class="card-body">
            <table class="table table-responsive table-striped align-middle">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Email</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Membership Type</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @forelse ($users as $item)
                        <tr>
                            <th scope="row"> {{ $item->id }} </th>
                            <td> {{ $item->email }} </td>
                            <td> {{ $item->username }} </td>
                            <td> {{ $item->password }} </td>
                            <td> {{ $item->membership_type }} </td>
                            <td>
                                <div class="d-flex flex-row justify-content-between btn-group py-2 gap-2" role="group"
                                    aria-label="Action">
                                    <button type="button" class="btn btn-sm btn-edit" data-bs-toggle="modal"
                                        data-bs-target="#EditUser">EDIT</button>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('User.delete', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">No Users Data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer d-flex flex-col justify-content-end align-items-center">
            {{ $users->links() }}
        </div>
    </div>

    <!-- Modal Create -->
    <div class="modal fade" id="CreateUser" tabindex="-1" aria-labelledby="CreateUserLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content px-3 py-1">
                <div class="modal-header">
                    <h3 class="modal-title" id="CreateUserLabel">Create User</h3>
                </div>
                <div class="modal-body">
                    <!-- Content -->
                    <form action="{{ route('User.store') }}" method="POST" enctype="multipart/form-data">
                        <!-- token form -->
                        @csrf
                        <div class="mb-3">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" value="{{ old('username') }}"
                                class="form-control @error('username') is-invalid @enderror" required>
                            <!-- error message -->
                            @error('username')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email">User Email</label>
                            <input type="text" name="email" id="email" value="{{ old('email') }}"
                                class="form-control @error('email') is-invalid @enderror" required>
                            <!-- error message -->
                            @error('email')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password">User Password</label>
                            <input type="password" name="password" id="password" value="{{ old('password') }}"
                                class="form-control @error('password') is-invalid @enderror" required>
                            <!-- error message -->
                            @error('password')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="membership_type">Membership type</label>
                            <input type="hidden" name="membership_type_input" value="">
                            <select id="membership_type" name="membership_type"
                                class="form-control @error('membership_type') is-invalid @enderror" required>
                                <option value="" selected>- Choose -</option>
                                <option value="Free" {{ old('membership_type') == 'Free' ? 'selected' : '' }}>Free
                                </option>
                                <option value="Paid"{{ old('membership_type') == 'Paid' ? 'selected' : '' }}>Paid
                                </option>
                            </select>

                            @error('membership_type')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="EditUser" tabindex="-1" aria-labelledby="EditUserLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
            <div class="modal-content px-3 py-1">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="EditUserLabel">Edit User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Content -->
                    <form action="{{ route('User.edit', $user->id) }}" method="POST" enctype="multipart/form-data">
                        <!-- token form -->
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username"
                                value="{{ old('username', $user->username) }}"
                                class="form-control @error('username') is-invalid @enderror" required>
                            <!-- error message -->
                            @error('username')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="email">User Email</label>
                            <input type="text" name="email" id="email"
                                value="{{ old('email', $user->email) }}"
                                class="form-control @error('email') is-invalid @enderror" required>
                            <!-- error message -->
                            @error('email')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">User Password</label>
                            <input type="password" name="password" id="password"
                                value="{{ old('password', $user->password) }}"
                                class="form-control @error('password') is-invalid @enderror" disabled>
                            <!-- error message -->
                            @error('password')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="membership_type">Membership type</label>
                            <input type="hidden" name="membership_type_input" value="">
                            <select id="membership_type" name="membership_type"
                                class="form-control @error('membership_type') is-invalid @enderror" required>
                                <option value="" selected>- Choose -</option>
                                <option value="Free" {{ old('membership_type') == 'Free' ? 'selected' : '' }}>Free
                                </option>
                                <option value="Paid"{{ old('membership_type') == 'Paid' ? 'selected' : '' }}>Paid
                                </option>
                            </select>

                            @error('membership_type')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            var memberType = document.getElementById('membership_type').value;
            if (memberType === '- Choose -') {
                alert('Please select a member type');
                return false;
            }
            return true;
        }
    </script>
@endsection
