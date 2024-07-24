@extends('admin.layout.layout')

@section('PageTitle', 'Admin - Manage Purchase Histoy')
@section('NavbarTitle', 'Manage Purchase History')
@section('PurchaseActive', 'active')

@section('Content')
    <div class="card shadow-sm w-100 px-3">
        <div class="card-header d-flex justify-content-between pt-4 fs-5 fw-bold">
            Purchase History ({{ $count }})

        </div>
        <div class="card-body">
            <table class="table table-responsive table-striped align-middle">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Subscription Type</th>
                        <th scope="col">Status</th>
                        <th scope="col">Purchase Date</th>
                        <th scope="col">Expired Date</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @forelse ($payments as $item)
                        <tr>
                            <th scope="row"> {{ $item->id }} </th>
                            <td> {{ $item->username }} </td>
                            <td> {{ $item->email }} </td>
                            <td> {{ $item->duration }} Month</td>
                            <td> {{ $item->status }} </td>
                            <td> {{ $item->purchase_date }} </td>
                            <td>
                                @php
                                    $expiredDate = date(
                                        'Y-m-d',
                                        strtotime($item->purchase_date . ' +' . $item->duration . ' months'),
                                    );
                                @endphp
                                {{ $expiredDate }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9">No Users Data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer d-flex flex-col justify-content-end align-items-center">
            {{ $payments->links() }}
        </div>
    </div>
@endsection
