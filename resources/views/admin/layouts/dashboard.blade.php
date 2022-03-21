@extends('admin.master')
@section('contents')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-dark text-white mb-4">
                    <div class="card-body">
                        <h5>Total Product</h5>
                    </div>
                    <div class="card-footer text-center">
                        <p>5050</p>
                    </div>
                </div>
            </div>

            <!-- new -->

            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">
                        <h5>Total Customer</h5>
                    </div>
                    <div class="card-footer text-center">
                        <p>5050</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection