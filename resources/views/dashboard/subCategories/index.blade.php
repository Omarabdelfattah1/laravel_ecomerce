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
                                <h3>Category
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Physical</li>
                                <li class="breadcrumb-item active">Category</li>
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
                                <h5>Products Sub Category</h5>
                            </div>
                            <div class="card-body">
                                <div class="btn-popup pull-right">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-original-title="test" data-target="#exampleModal">Add Sub Category</button>
                                    @include('dashboard.subCategories.create')
                                </div>
                                <div class="card-body">
                                <div class="table-responsive">
                                    <div id="basicScenario" class="product-physical jsgrid" style="position: relative; height: auto; width: 100%;">
                                    <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                                        <table class="jsgrid-table">
                                            <tr class="jsgrid-header-row">
                                                <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 100px;">Name</th>
                                                <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 50px;">Discription</th>
                                                <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 50px;">Main Category</th>
                                                <th class="jsgrid-header-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;">
                                                    <input class="jsgrid-button jsgrid-mode-button jsgrid-insert-mode-button" type="button" title="Switch to inserting">
                                                </th>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="jsgrid-grid-body">
                                        <table class="jsgrid-table">
                                            <tbody>
                                                @foreach($subCategories as $s_category)
                                                    <tr class="jsgrid-row" style="">
                                                        <td class="jsgrid-cell" style="width: 100px;">{{ $s_category->name }}</td>
                                                        <td class="jsgrid-cell" style="width: 50px;">{{ $s_category->description }}</td>
                                                        <td class="jsgrid-cell" style="width: 50px;">{{ $s_category->category->name }}</td>
                                                        <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;">
                                                            
                                                        <input class="jsgrid-button jsgrid-edit-button" type="button" title="Edit" data-toggle="modal"
                                                               data-original-title="Edit" data-target="#editSubCategory">
                                                        <input class="jsgrid-button jsgrid-delete-button" type="button" title="Delete" data-toggle="modal"
                                                               data-original-title="Delete" data-target="#deleteSubCategory">
                                                           
                                                        @include('dashboard.subCategories.edit')
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
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