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
                                <h3>Sub Category
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
                                <div class="btn-popup pull-right">
                                    <a href="{{ route('subcategories.create') }}" class="btn btn-primary">Add Sub Category</a>
                                </div>
                            </div>
                            <div class="card-body">
                                @if($errors->any())
                                    @foreach($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach
                                @endif
                                <form class="needs-validation" action="{{route('subcategories.store')}}" method="post">
                                    <div class="form">
                                        @csrf
                                        <div class="form-group">
                                            <label for="validationCustom01" class="mb-1">Main Category:</label>
                                            <select id="validationCustom01" class="form-control" name="category_id">
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{ $category->translate('en')
                                                    ->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="validationCustom01" class="mb-1">Sub
                                                Category Name in Arabic:</label>
                                            <input class="form-control" id="validationCustom01"
                                                   type="text" name="ar[name]">
                                        </div>
                                        <div class="form-group">
                                            <label for="validationCustom01" class="mb-1">Sub
                                                Category Name in English :</label>
                                            <input class="form-control" id="validationCustom01"
                                                   type="text" name="en[name]">
                                        </div>

                                        <div class="form-group">
                                            <label for="validationCustom01" class="mb-1">Description in Arabic :</label>
                                            <input class="form-control" id="validationCustom01"
                                                   type="text" name="ar[description]">
                                        </div>
                                        <div class="form-group">
                                            <label for="validationCustom01" class="mb-1">Description in English :</label>
                                            <input class="form-control" id="validationCustom01"
                                                   type="text" name="en[description]">
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
