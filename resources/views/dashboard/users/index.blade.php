
@extends('dashboard.layouts.master')
@section('css')
    <!-- jsgrid css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jsgrid.css') }}">
@endsection

@section('content')

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>User List
                            <small>Multikart Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active">User List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>User Details</h5>
            </div>
            <div class="card-body">
                <div class="btn-popup pull-right">
                    <a href="create-user.html" class="btn btn-secondary">Create User</a>
                </div>
                <div id="batchDelete" class="category-table user-list order-table"></div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

@endsection

@section('js')
    <!-- Jsgrid js-->
    <script src="{{ asset('assets/js/jsgrid/jsgrid.min.js') }}"></script>
    <script src="{{ asset('assets/js/jsgrid/griddata-users.js') }}"></script>
    <script src="{{ asset('assets/js/jsgrid/jsgrid-users.js') }}"></script>

@endsection


