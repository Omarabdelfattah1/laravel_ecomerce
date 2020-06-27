
@extends('dashboard.layouts.master')
@section('css')
    <!-- Datatable css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
@endsection

@section('content')

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Vendor List
                            <small>Multikart Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Vendors</li>
                        <li class="breadcrumb-item active">Vendor List</li>
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
                <h5>Vendor Details</h5>
                <div class="btn-popup pull-right">
                    <a class="btn btn-primary" href="{{ route('seller.create') }}">Add Vendor</a>
                </div>
            </div>
            <div class="card-body vendor-table">
                <table class="display" id="basic-1">
                    <thead>
                    <tr>
                        <th>Vendor</th>
                        <th>Products</th>
                        <th>Store Name</th>
                        <th>Create Date</th>
                        <th>Wallet Balance</th>
                        <th>Revenue</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sellers as $seller)
                        <tr>
                        <td>
                            <div class="d-flex vendor-list">
                                <img src="{{ asset('assets/images/team/2.jpg') }}" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                <span>{{ $seller->user()->first()->name}}</span>
                            </div>
                        </td>
                        <td>{{ $seller->products()->count() }}</td>
                        <td>{{ $seller->name }}</td>
                        <td>{{ $seller->created_at->diffForHumans() }}</td>
                        <td>$576132</td>
                        <td>$9761266</td>
                        <td>
                            <div>
                                <a href="{{ route('seller.edit', $seller) }}"><i class="fa fa-edit mr-2 font-success"></i></a>
                                <i class="fa fa-trash font-danger"></i>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

@endsection

@section('js')
    <!-- Datatables js-->
    <script src="{{ asset('assets/js/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables/custom-basic.js') }}"></script>

@endsection


