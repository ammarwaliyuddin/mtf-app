@extends('layout.Master')
@section('content')

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="card">
                    <div class="card-header border-0 bg-danger">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">Target 1</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="progress-group">
                            <strong>20 Customer</strong> Today
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-danger" style="width: 70%"></div>
                            </div>
                        </div>

                        <!-- /.d-flex -->
                        <div class="d-flex flex-row justify-content-end">
                            <span class="mr-2">
                                <strong>30 Customers</strong> in 30 days
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="card">
                    <div class="card-header border-0 bg-danger">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">Target 2</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="progress-group">
                            <strong>9 Customer</strong> Today
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-danger" style="width: 40%"></div>
                            </div>
                        </div>

                        <!-- /.d-flex -->
                        <div class="d-flex flex-row justify-content-end">
                            <span class="mr-2">
                                <strong>20 Customers</strong> in 30 days
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card card-danger card-tabs">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Task</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade active show" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                <div class="col-12">
                                    <!-- small box -->
                                    <a href="">
                                        <div class="small-box bg-danger p-3 mb-2">
                                            <h4 class="mb-0 d-inline"><strong>Daily Report</strong> </h4>
                                            <span class="float-right">
                                                <h4 class="mb-0 d-inline">0</h4>
                                            </span>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="small-box bg-danger p-3 mb-2">
                                            <h4 class="mb-0 d-inline"><strong>Total Visit</strong> </h4>
                                            <span class="float-right">
                                                <h4 class="mb-0 d-inline">4</h4>
                                            </span>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="small-box bg-danger p-3 mb-2">
                                            <h4 class="mb-0 d-inline"><strong>Over Booking</strong> </h4>
                                            <span class="float-right">
                                                <h4 class="mb-0 d-inline">10</h4>
                                            </span>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="small-box bg-danger p-3 mb-2">
                                            <h4 class="mb-0 d-inline"><strong>Customers Report</strong> </h4>
                                            <span class="float-right">
                                                <h4 class="mb-0 d-inline">16</h4>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                <a href="">
                                    <div class="small-box bg-danger p-3 mb-2">
                                        <div class="d-flex justify-content-between">
                                            <div class="">
                                                <h4 class="m-0">Target 1</h4>
                                                <p class="mb-1">Mendatangi nasabah yang sudah menunjak pinjamannya</p>
                                            </div>
                                            <div class="float-right">
                                                <h3 class="text-center m-0">25</h3>
                                                <p class="mb-1">in 30 Days</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="">
                                    <div class="small-box bg-danger p-3 mb-2">
                                        <div class="d-flex justify-content-between">
                                            <div class="">
                                                <h4 class="m-0">Target 2</h4>
                                                <p class="mb-1">Mendatangi nasabah yang sudah menunjak pinjamannya</p>
                                            </div>
                                            <div class="float-right">
                                                <h3 class="text-center m-0">3</h3>
                                                <p class="mb-1">in 30 Days</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="">
                                    <div class="small-box bg-danger p-3 mb-2">
                                        <div class="d-flex justify-content-between">
                                            <div class="">
                                                <h4 class="m-0">Target 3</h4>
                                                <p class="mb-1">Mendatangi nasabah yang sudah menunjak pinjamannya</p>
                                            </div>
                                            <div class="float-right">
                                                <h3 class="text-center m-0">15</h3>
                                                <p class="mb-1">in 30 Days</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="">
                                    <div class="small-box bg-danger p-3 mb-2">
                                        <div class="d-flex justify-content-between">
                                            <div class="">
                                                <h4 class="m-0">Target 4</h4>
                                                <p class="mb-1">Mendatangi nasabah yang sudah menunjak pinjamannya</p>
                                            </div>
                                            <div class="float-right">
                                                <h3 class="text-center m-0">29</h3>
                                                <p class="mb-1">in 30 Days</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->

</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection