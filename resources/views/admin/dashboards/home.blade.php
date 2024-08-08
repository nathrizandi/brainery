@extends('admin.layout.layout')

@section('PageTitle', 'Admin - Home')
@section('NavbarTitle', 'Homepage')
@section('HomeActive', 'active')

@section('Content')
<div class="card col-12">
    <div class="card-header pb-0 fs-5 fw-bold">
        Logs
    </div>
    <div class="card-body d-flex flex-column gap-3">
        <div class="d-flex flex-column gap-1">
            <!-- For Each Here -->
            @foreach ($formattedLogs as $log)
                <div class="d-flex justify-content-between flex-row gap-3">
                    <div class="d-flex flex-column justify-content-center rounded text-center m-0 p-0 w-25"
                        style="background: #739EF1">
                        <p class="m-0">{{ $log['month'] }}</p>
                        <p class="m-0 fs-4 fw-bold lh-sm">{{ $log['date'] }}</p>
                        <p class="m-0">{{ $log['year'] }}</p>
                    </div>
                    <div class="d-flex justify-content-between flex-column m-0 p-0 w-100">
                        <p class="m-0">{{ $log['action'] }}</p>
                        <p class="m-0">{{ $log['description'] }}</p>
                        <p class="m-0" style="color: #739EF1">{{ $log['time'] }}</p>
                    </div>
                </div>
                {{-- <div class="d-flex justify-content-between flex-row gap-3">
                <div class="d-flex flex-column justify-content-center rounded text-center m-0 p-0 w-25" style="background: #739EF1">
                    <p class="m-0">DEC</p>
                    <p class="m-0 fs-4 fw-bold lh-sm">30</p>
                    <p class="m-0">2999</p>
                </div>
                <div class="d-flex justify-content-between flex-column m-0 p-0 w-100">
                    <p class="m-0">Lorem Ipsum</p>
                    <p class="m-0">Lorem Ipsum</p>
                    <p class="m-0" style="color: #739EF1">00:00 AM</p>
                </div>
            </div> --}}
            @endforeach
            <!-- End For Each Here -->
        </div>
        <button class="btn btn-primary btn-profile py-1">See More</button>
    </div>
</div>
@endsection
