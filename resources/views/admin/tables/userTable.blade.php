<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .table-container{
            background: white;
        }
        .btn-edit{
            background: #F76D3B;
            border-color: #F76D3B;
            /* --bs-btn-font-size: .75rem; */
        }
        .btn-trash-custom{
            background:  black;
            border-color: black;            
        }
        .custom-page-link{
            color: black;
            border-style: none;
        }
        .custom-modal-content{
            background: #FEF8F3;
        }
    </style>
</head>
<body>  
    <!-- Modal -->
    @include('admin.components.userModal')

    <div class="user-table-body h-100">
        <div class="d-md-flex px-4 py-5 h-100">
            <div class="d-md-flex flex-column px-4 py-2 table-container justify-content-around shadow w-100">
                <div class="d-md-flex flex-row align-items-end justify-content-between">
                    <div class="d-md-flex flex-row align-items-end column-gap-2">
                        <h5 class="fw-bold">Total Users</h5>
                        <h6 class="fw-normal">
                            {{-- @yield('name') --}}
                            (200.000)
                        </h6>
                    </div>
                    <button class="btn btn-primary btn-sm btn-trash-custom px-4">
                        <i class="bi bi-trash-fill me-1"></i>
                        Trash
                    </button>
                </div>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr><th scope="row">1</th><td>Lorem</td><td>Lorem</td><td>Lorem</td></tr>
                        <tr><th scope="row">2</th><td>Lorem</td><td>Lorem</td><td>Lorem</td></tr>
                        <tr><th scope="row">3</th><td>Lorem</td><td>Lorem</td><td>Lorem</td></tr>
                        <tr><th scope="row">4</th><td>Lorem</td><td>Lorem</td><td>Lorem</td></tr>
                        <tr><th scope="row">5</th><td>Lorem</td><td>Lorem</td><td>Lorem</td></tr>
                        <tr><th scope="row">6</th><td>Lorem</td><td>Lorem</td><td>Lorem</td></tr>
                        <tr><th scope="row">7</th><td>Lorem</td><td>Lorem</td><td>Lorem</td></tr>
                        <tr><th scope="row">8</th><td>Lorem</td><td>Lorem</td><td>Lorem</td></tr>
                        <tr><th scope="row">9</th><td>Lorem</td><td>Lorem</td><td>Lorem</td></tr>
                        <tr><th scope="row">10</th><td>Lorem</td><td>Lorem</td><td>Lorem</td></tr>
                    </tbody>
                </table>
                <div class="d-md-flex flex-row align-items-start justify-content-between w-100" >
                    <div class="d-md-flex flex-row column-gap-2">
                        <button class="btn btn-primary btn-sm btn-edit px-4" data-bs-toggle="modal" data-bs-target="#user-modal">Edit</button>
                        <button class="btn btn-primary btn-sm btn-edit px-4">Delete</button>
                        <button class="btn btn-primary btn-sm btn-edit px-4">Block</button>
                    </div>
                    <div class="d-md-flex">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                              <li class="page-item"><a class="page-link custom-page-link" href="#">Prev</a></li>
                              <li class="page-item"><a class="page-link custom-page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link custom-page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link custom-page-link" href="#">3</a></li>
                              <li class="page-item"><a class="page-link custom-page-link" href="#">4</a></li>
                              <li class="page-item"><a class="page-link custom-page-link" href="#">5</a></li>
                              <li class="page-item"><a class="page-link custom-page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>