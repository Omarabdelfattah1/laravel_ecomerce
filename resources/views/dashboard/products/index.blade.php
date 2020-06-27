@extends('dashboard.layouts.master')

@section('css')
    <!-- jsgrid css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jsgrid.css') }}">

@endsection

@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Product
                            <small>Multikart Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Physical</li>
                        <li class="breadcrumb-item active">Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Products</h5>
                    </div>
                    <div class="card-body">
                        <div class="btn-popup pull-right">
                            <div class="btn-popup pull-right">
                                <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <div id="basicScenario" class="product-physical jsgrid" style="position: relative; height: auto; width: 100%;">
                                <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                                    <table class="jsgrid-table">
                                        <tr class="jsgrid-header-row">
                                            <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 50px;">Image</th>
                                            <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 100px;">Name</th>
                                            <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 50px;">Discription</th>
                                            <th class="jsgrid-header-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;">
                                                <input class="jsgrid-button jsgrid-mode-button jsgrid-insert-mode-button" type="button" title="Switch to inserting">
                                            </th>
                                        </tr>
                                    </table>
                                </div>
                                <div class="jsgrid-grid-body">
                                    <table class="jsgrid-table">
{{--                                        <tbody>--}}
{{--                                        @foreach($Products as $Product)--}}
{{--                                            <tr class="jsgrid-row" style="">--}}
{{--                                                <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;">--}}
{{--                                                    <img src="../assets/images/dashboard/product/1.jpg" class="blur-up lazyloaded" style="height: 50px; width: 50px;">--}}
{{--                                                </td>--}}
{{--                                                <td class="jsgrid-cell" style="width: 100px;">{{ $Product->name }}</td>--}}
{{--                                                <td class="jsgrid-cell" style="width: 50px;">{{ $Product->description }}</td>--}}
{{--                                                <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;">--}}
{{--                                                    <input class="jsgrid-button jsgrid-edit-button" type="button" title="Edit">--}}
{{--                                                    <input class="jsgrid-button jsgrid-delete-button" type="button" title="Delete">--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                        @endforeach--}}
{{--                                        </tbody>--}}
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

    </div>

    <!-- footer start-->

@endsection


@section('js')
    <!-- Jsgrid js-->
    <script src="{{ asset('assets/js/jsgrid/jsgrid.min.js') }}"></script>
    <script src="{{ asset('assets/js/jsgrid/griddata-transactions.js') }}"></script>
    <script src="{{ asset('assets/js/jsgrid/jsgrid-transactions.js') }}"></script>

@endsection
