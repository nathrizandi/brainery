@extends('admin.layout.layout')

@section('PageTitle', 'Admin - Manage Bootcamp')
@section("NavbarTitle", "Manage Bootcamp")
@section('BootcampActive', "active")

@section('Content')
    <div class="card w-100 px-3">
        <div class="card-header d-flex justify-content-between pt-4 fs-5 fw-bold">
            Total Bootcamp
            <button href="#" class="btn btn-primary btn-trash px-3"><i class="bi bi-trash"></i> Trash</button>
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer pb-4">
            <button type="button" class="btn btn-primary px-3" data-bs-toggle="modal" data-bs-target="#EditBootcamp">Edit</button>
            <button type="button" class="btn btn-primary px-3" data-bs-toggle="modal" data-bs-target="#DeleteAlert">Delete</button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="EditBootcamp" tabindex="-1" aria-labelledby="EditBootcampLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="EditBootcampLabel">Edit Bootcamp</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <!-- Content -->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Update</button>
            </div>
        </div>
        </div>
    </div>
@endsection
