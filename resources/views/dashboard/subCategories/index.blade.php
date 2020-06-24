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
                                <h5>Products Category</h5>
                            </div>
                            <div class="card-body">
                                <div class="btn-popup pull-right">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-original-title="test" data-target="#exampleModal">Add Category</button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Add Physical Product</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="needs-validation" action="{{route('subcategories.store')}}" method="post">
                                                        <div class="form">
                                                        @csrf
                                                            <div class="form-group">
                                                                <label for="validationCustom01" class="mb-1">Main Category:</label>
                                                                <select id="validationCustom01" class="form-control" name="category_id">
                                                                    @foreach($categories as $category)
                                                                        <option value="{{$category->id}}">{{$category->translate('en')->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="validationCustom01" class="mb-1">Sub Category Name :</label>
                                                                <input class="form-control" id="validationCustom01" type="text" name="name">
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                <label for="validationCustom01" class="mb-1">Description :</label>
                                                                <input class="form-control" id="validationCustom01" type="text" name="description">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <input class="btn btn-primary" type="submit" value="Save">
                                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <div id="basicScenario" class="product-physical jsgrid" style="position: relative; height: auto; width: 100%;">
                                    <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                                        <table class="jsgrid-table">
                                            <tr class="jsgrid-header-row">
                                                <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" style="width: 50px;">Image</th>
                                                <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 100px;">Name</th>
                                                <th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable" style="width: 50px;">Price</th>
                                                <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 50px;">Status</th>
                                                <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 50px;">Category</th>
                                                <th class="jsgrid-header-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;">
                                                    <input class="jsgrid-button jsgrid-mode-button jsgrid-insert-mode-button" type="button" title="Switch to inserting">
                                                </th>
                                            </tr>
                                            <tr class="jsgrid-filter-row" style="display: table-row;">
                                                <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;"></td>
                                                <td class="jsgrid-cell" style="width: 100px;"><input type="text"></td>
                                                <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">
                                                    <input type="number">
                                                </td>
                                                <td class="jsgrid-cell" style="width: 50px;">
                                                    <input type="text">
                                                </td>
                                                <td class="jsgrid-cell" style="width: 50px;">
                                                    <input type="text">
                                                </td>
                                                <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;">
                                                    <input class="jsgrid-button jsgrid-search-button" type="button" title="Search">
                                                    <input class="jsgrid-button jsgrid-clear-filter-button" type="button" title="Clear filter">
                                                </td>
                                            </tr>
                                            <tr class="jsgrid-insert-row" style="display: none;">
                                                <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;">
                                                    <input type="file">
                                                </td>
                                                <td class="jsgrid-cell" style="width: 100px;">
                                                    <input type="text">
                                                </td>
                                                <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">
                                                    <input type="number">
                                                </td>
                                                <td class="jsgrid-cell" style="width: 50px;">
                                                    <input type="text">
                                                </td>
                                                <td class="jsgrid-cell" style="width: 50px;">
                                                    <input type="text">
                                                </td>
                                                <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;">
                                                    <input class="jsgrid-button jsgrid-insert-button" type="button" title="Insert">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>        
                                    <div class="jsgrid-grid-body"> 
                                        <table class="jsgrid-table">
                                            <tbody>
                                            
                                                <tr class="jsgrid-row" style="">
                                                    <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;">
                                                        <img src="../assets/images/dashboard/product/1.jpg" class="blur-up lazyloaded" style="height: 50px; width: 50px;">
                                                    </td>
                                                    <td class="jsgrid-cell" style="width: 100px;">Headphones</td>
                                                    <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">$20.00</td>
                                                    <td class="jsgrid-cell" style="width: 50px;"><i class="fa fa-circle font-success f-12"></i></td>
                                                    <td class="jsgrid-cell" style="width: 50px;">Electronics</td>
                                                    <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;">
                                                        <input class="jsgrid-button jsgrid-edit-button" type="button" title="Edit">
                                                        <input class="jsgrid-button jsgrid-delete-button" type="button" title="Delete">
                                                    </td>
                                                </tr>
                                            </tbody>
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