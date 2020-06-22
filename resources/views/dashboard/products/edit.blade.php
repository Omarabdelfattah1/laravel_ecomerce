
@extends('dashboard.layouts.master')

@section('content')

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Add Products
                            <small>Multikart Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Physical</li>
                        <li class="breadcrumb-item active">Add Product</li>
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
                        <h5>Add Product</h5>
                    </div>
                    <div class="card-body">
                        <div class="row product-adding">
                            <div class="col-xl-5">
                                <div class="add-product">
                                    <div class="row">
                                        <div class="col-xl-9 xl-50 col-sm-6 col-9">
                                            <img src="{{ asset('assets/images/pro3/1.jpg') }}" alt="" class="img-fluid image_zoom_1 blur-up lazyloaded">
                                        </div>
                                        <div class="col-xl-3 xl-50 col-sm-6 col-3">
                                            <ul class="file-upload-product">
                                                <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                                                <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                                                <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                                                <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                                                <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                                                <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <form class="needs-validation add-product-form" novalidate="">
                                    <div class="form">
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Title :</label>
                                            <input class="form-control col-xl-8 col-sm-7" id="validationCustom01" type="text" required="">
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Price :</label>
                                            <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" type="text" required="">
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Product Code :</label>
                                            <input class="form-control col-xl-8 col-sm-7" id="validationCustomUsername" type="text" required="">
                                            <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                        </div>
                                    </div>
                                    <div class="form">
                                        <div class="form-group row">
                                            <label for="exampleFormControlSelect1" class="col-xl-3 col-sm-4 mb-0">Select Size :</label>
                                            <select class="form-control digits col-xl-8 col-sm-7" id="exampleFormControlSelect1">
                                                <option>Small</option>
                                                <option>Medium</option>
                                                <option>Large</option>
                                                <option>Extra Large</option>
                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-sm-4 mb-0">Total Products :</label>
                                            <fieldset class="qty-box col-xl-9 col-xl-8 col-sm-7 pl-0">
                                                <div class="input-group">
                                                    <input class="touchspin" type="text" value="1">
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-sm-4">Add Description :</label>
                                            <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                                <textarea id="editor1" name="editor1" cols="10" rows="4"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="offset-xl-3 offset-sm-4">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                        <button type="button" class="btn btn-light">Discard</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('js')
    <!-- touchspin js-->
    <script src="{{ asset('assets/js/touchspin/vendors.min.js') }}"></script>
    <script src="{{ asset('assets/js/touchspin/touchspin.js') }}"></script>
    <script src="{{ asset('assets/js/touchspin/input-groups.min.js') }}"></script>

    <!-- form validation js-->
    <script src="{{ asset('assets/js/dashboard/form-validation-custom.js') }}"></script>

    <!-- ckeditor js-->
    <script src="{{ asset('assets/js/editor/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/js/editor/ckeditor/styles.js') }}"></script>
    <script src="{{ asset('assets/js/editor/ckeditor/adapters/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/editor/ckeditor/ckeditor.custom.js') }}"></script>

    <!-- Zoom js-->
    <script src="{{ asset('assets/js/jquery.elevatezoom.js') }}"></script>
    <script src="{{ asset('assets/js/zoom-scripts.js') }}"></script>
@endsection
