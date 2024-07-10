@extends('/template/layout')

@section('title', 'Profile')

@section('custom-csspage', '/css/manage-profile.css')

@section('content')
<div class="d-flex align-items-center mb-4" style="margin-left: 1%">
    <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/icon/user.png?raw=true" alt="Avatar" class="rounded-circle mr-3" style="width: 6vw"">
    <div style="margin-left: 2%">
        <h2 class="mb-0">jmk48</h2>
        <p class="mb-0 text-muted" style="font-weight: bold">Abrahamjmk48@gmail.com</p>
    </div>
</div>

<div class="row mt-6" style="margin-left: 2%">
    <div class="col-8 card">
        <p>tes</p>
    </div>
    <div class="col-2 card" style="margin-left: 3%">
        <p>tes2</p>
    </div>
</div>

@endsection