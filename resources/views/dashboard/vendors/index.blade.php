
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
                    <tr>
                        <td>
                            <div class="d-flex vendor-list">
                                <img src="{{ asset('assets/images/team/2.jpg') }}" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                <span>Petey Cruiser</span>
                            </div>
                        </td>
                        <td>1670</td>
                        <td>Warephase</td>
                        <td>8/10/18</td>
                        <td>$576132</td>
                        <td>$9761266</td>
                        <td>
                            <div>
                                <i class="fa fa-edit mr-2 font-success"></i>
                                <i class="fa fa-trash font-danger"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex vendor-list">
                                <img src="{{ asset('assets/images/dashboard/user5.jpg') }}" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                <span>Rowan torres</span>
                            </div>
                        </td>
                        <td>790</td>
                        <td>Sunnamplex</td>
                        <td>5/6/18</td>
                        <td>$87610</td>
                        <td>$631479</td>
                        <td>
                            <div>
                                <i class="fa fa-edit mr-2 font-success"></i>
                                <i class="fa fa-trash font-danger"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex vendor-list">
                                <img src="{{ asset('assets/images/dashboard/boy-2.png') }}" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                <span>Gray Brody</span>
                            </div>
                        </td>
                        <td>579</td>
                        <td>Conecom</td>
                        <td>25/2/18</td>
                        <td>$245508</td>
                        <td>$1279520</td>
                        <td>
                            <div>
                                <i class="fa fa-edit mr-2 font-success"></i>
                                <i class="fa fa-trash font-danger"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex vendor-list">
                                <img src="../assets/images/dashboard/user.png" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                <span>Lane Skylar</span>
                            </div>
                        </td>
                        <td>8972</td>
                        <td>Golddex</td>
                        <td>30/3/18</td>
                        <td>$7812483</td>
                        <td>$8761424</td>
                        <td>
                            <div>
                                <i class="fa fa-edit mr-2 font-success"></i>
                                <i class="fa fa-trash font-danger"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex vendor-list">
                                <img src="../assets/images/dashboard/designer.jpg" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                <span>Colton Clay</span>
                            </div>
                        </td>
                        <td>9710</td>
                        <td>Green-Plus</td>
                        <td>6/5/18</td>
                        <td>$780250</td>
                        <td>$8793611</td>
                        <td>
                            <div>
                                <i class="fa fa-edit mr-2 font-success"></i>
                                <i class="fa fa-trash font-danger"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex vendor-list">
                                <img src="../assets/images/dashboard/user2.jpg" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                <span>Woters maxine</span>
                            </div>
                        </td>
                        <td>680</td>
                        <td>Kan-code</td>
                        <td>15/4/18</td>
                        <td>$27910</td>
                        <td>$579214</td>
                        <td>
                            <div>
                                <i class="fa fa-edit mr-2 font-success"></i>
                                <i class="fa fa-trash font-danger"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex vendor-list">
                                <img src="../assets/images/dashboard/user1.jpg" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                <span>Lane Skylar</span>
                            </div>
                        </td>
                        <td>8678</td>
                        <td>Plexzap</td>
                        <td>4/8/18</td>
                        <td>$89340</td>
                        <td>$10285255</td>
                        <td>
                            <div>
                                <i class="fa fa-edit mr-2 font-success"></i>
                                <i class="fa fa-trash font-danger"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex vendor-list">
                                <img src="../assets/images/dashboard/user3.jpg" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                <span>Perez Alonzo</span>
                            </div>
                        </td>
                        <td>3476</td>
                        <td>Betatech</td>
                        <td>17/9/18</td>
                        <td>$32451</td>
                        <td>$647212</td>
                        <td>
                            <div>
                                <i class="fa fa-edit mr-2 font-success"></i>
                                <i class="fa fa-trash font-danger"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex vendor-list">
                                <img src="../assets/images/team/3.jpg" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                <span>Anna Mull</span>
                            </div>
                        </td>
                        <td>1670</td>
                        <td>Zotware</td>
                        <td>8/10/18</td>
                        <td>$576132</td>
                        <td>$9761266</td>
                        <td>
                            <div>
                                <i class="fa fa-edit mr-2 font-success"></i>
                                <i class="fa fa-trash font-danger"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex vendor-list">
                                <img src="../assets/images/team/1.jpg" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                <span>Paige Turner</span>
                            </div>
                        </td>
                        <td>4680</td>
                        <td>Finhigh</td>
                        <td>11/7/18</td>
                        <td>$87616</td>
                        <td>$947611</td>
                        <td>
                            <div>
                                <i class="fa fa-edit mr-2 font-success"></i>
                                <i class="fa fa-trash font-danger"></i>
                            </div>
                        </td>
                    </tr>

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


