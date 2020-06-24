
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
                                    <img src="../assets/images/pro3/1.jpg" alt="" class="img-fluid image_zoom_1 blur-up lazyloaded">
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
                        <form class="needs-validation add-product-form" novalidate="" method="post">
                            <div class="form">
                                <div class="form-group mb-3 row">
                                    <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Title :</label>
                                    <input class="form-control col-xl-8 col-sm-7" id="validationCustom01" name="en[name]" type="text" required="">
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Description :</label>
                                    <input class="form-control col-xl-8 col-sm-7" name="en[description]" id="validationCustom02" type="text" required="">
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Price :</label>
                                    <input class="form-control col-xl-8 col-sm-7" name="price" id="validationCustom02" type="number" required="">
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <!-- <div class="form-group mb-3 row">
                                    <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Product Code :</label>
                                    <input class="form-control col-xl-8 col-sm-7" name="" id="validationCustomUsername" type="text" required="">
                                    <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                </div> -->
                            </div>
                            <div class="form">
                                <div class="form-group row" id="ref">
                                    <label for="exampleFormControlSelect1" class="col-xl-3 col-sm-4 mb-0">Category :</label>
                                    <select name="category" class="form-control digits col-xl-8 col-sm-7" id="exampleFormControlSelect1">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-sm-4 mb-0">Total Products :</label>
                                    <fieldset class="qty-box col-xl-9 col-xl-8 col-sm-7 pl-0">
                                        <div class="input-group">
                                            <input class="touchspin" name="quantity" type="text" value="1">
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
    <script src="../assets/js/touchspin/vendors.min.js"></script>
    <script src="../assets/js/touchspin/touchspin.js"></script>
    <script src="../assets/js/touchspin/input-groups.min.js"></script>
    <script>
        // function myFunction() {
        //     var x = $("#exampleFormControlSelect1").value;
        //     $.get("{{route('subcatecories.index',x)}}",function(data,){
        //         $("#ref").after(`
        //         <div class="form-group row" id="ref">
        //             <label for="exampleFormControlSelect1" class="col-xl-3 col-sm-4 mb-0">Category :</label>
        //             <select name="category" class="form-control digits col-xl-8 col-sm-7" id="exampleFormControlSelect1">
        //                 @foreach($data as $category)
        //                     <option value="{{$category->id}}">{{$category->name}}</option>
        //                 @endforeach
        //             </select>
        //         </div>
        //         `);
        //     });
        // }
</script>

    <!-- form validation js-->
    <script src="../assets/js/dashboard/form-validation-custom.js"></script>

    <!-- ckeditor js-->
    <script src="../assets/js/editor/ckeditor/ckeditor.js"></script>
    <script src="../assets/js/editor/ckeditor/styles.js"></script>
    <script src="../assets/js/editor/ckeditor/adapters/jquery.js"></script>
    <script src="../assets/js/editor/ckeditor/ckeditor.custom.js"></script>

    <!-- Zoom js-->
    <script src="../assets/js/jquery.elevatezoom.js"></script>
    <script src="../assets/js/zoom-scripts.js"></script>
@endsection

