
@extends('dashboard.layouts.master')

@section('content')

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <div class="page-header-left">
                        <h3>Create Vendor
                            <small>Multikart Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('seller.index') }}">Vendors</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('seller.create') }}">Create Vendor
                            </a></li>
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
                <div class="card tab2-card">
                    <div class="card-header">
                        <h5> Add Vendor</h5>
                        <div class="btn-popup pull-right">
                            <a class="btn btn-primary" href="{{ route('seller.create') }}">Add Vendor</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                                <form class="needs-validation user-add" action="{{ route('seller.store') }}"
                                      method="POST">
                                    @csrf
                                    <h4>Company</h4>
                                    <div class="form-group row">
                                        <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> Company Name</label>
                                        <input class="form-control col-xl-8 col-md-7" id="validationCustom0" type="text" name="name">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="pull-right">
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

@endsection


