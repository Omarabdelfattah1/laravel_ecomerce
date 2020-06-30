
@extends('dashboard.layouts.master')


@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
@endsection
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
                    <form class="needs-validation add-product-form" action="{{ route('products.store') }}"
                              method="post" enctype="multipart/form-data">
                        
                        <div class="col-xl-7">
                            @if($errors->any())
                                @foreach($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            @endif
                            @csrf
                                <div class="form">
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Title in English :</label>
                                        <input class="form-control col-xl-8 col-sm-7" name="en[name]" type="text" required="">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Title in Arabic :</label>
                                        <input class="form-control col-xl-8 col-sm-7" name="ar[name]" type="text" required="">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Price :</label>
                                        <input class="form-control col-xl-8 col-sm-7" name="price" type="number" required="">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                </div>
                                <div class="form">
                                    <div class="form-group row" >
                                        <label for="exampleFormControlSelect1" class="col-xl-3 col-sm-4 mb-0">Category :</label>
                                        <select name="category_id" class="form-control digits col-xl-8 col-sm-7" id="category">
                                            <option disabled selected value> -- select a category -- </option>
                                            @foreach($categories as $category)
                                                <option  value="{{$category->id}}">
                                                    {{$category->name}}
                                                </option>

                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group row" id="ref">
                                        <label for="exampleFormControlSelect1" class="col-xl-3 col-sm-4 mb-0">SubCategory :</label>
                                        <select  name="subcategory_id" class="form-control digits col-xl-8 col-sm-7" id="sub_categories">
                                            
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
                                    <input type="number" name="coupon_id" value="0">
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-sm-4">Description in Arabic :</label>
                                        <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                            <textarea id="editor1" name="ar[description]" cols="10" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-sm-4">Description in English :</label>
                                        <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                            <textarea id="editor1" name="en[description]" cols="10" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                                
                                <article>
                                    <label for="files">Select multiple files: </label>
                                    <input id="files" type="file" name="images[]" multiple="">
                                    <button type="button" id="clear" style="display:none;">Clear</button>
                                    <output id="result" style="display:none;">
                                    </output>
                                </article>         
                                <div class="offset-xl-3 offset-sm-4">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                    <button type="button" class="btn btn-light">Discard</button>
                                </div>
                            
                        </div>
                        
                    </form>
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
    <script>
    // tell the embed parent frame the height of the content
    if (window.parent && window.parent.parent){
      window.parent.parent.postMessage(["resultsFrame", {
        height: document.body.getBoundingClientRect().height,
        slug: "2xES5"
      }], "*")
    }

    // always overwrite window.name, in case users try to set it manually
    window.name = "result"
  </script>

    <script>
      let allLines = []

      window.addEventListener("message", (message) => {
        if (message.data.console){
          let insert = document.querySelector("#insert")
          allLines.push(message.data.console.payload)
          insert.innerHTML = allLines.join(";\r")

          let result = eval.call(null, message.data.console.payload)
          if (result !== undefined){
            console.log(result)
          }
        }
      })
    </script>
    <script src="../assets/js/touchspin/vendors.min.js"></script>
    <script src="../assets/js/touchspin/touchspin.js"></script>
    <script src="../assets/js/touchspin/input-groups.min.js"></script>
    

    <!-- ckeditor js-->
    <script src="../assets/js/editor/ckeditor/ckeditor.js"></script>
    <script src="../assets/js/editor/ckeditor/styles.js"></script>
    <script src="../assets/js/editor/ckeditor/adapters/jquery.js"></script>
    <script src="../assets/js/editor/ckeditor/ckeditor.custom.js"></script>

    <!-- Zoom js-->
    <script src="../assets/js/jquery.elevatezoom.js"></script>
    <script src="../assets/js/zoom-scripts.js"></script>
    <script src="../js/script.js"></script>
@endsection

