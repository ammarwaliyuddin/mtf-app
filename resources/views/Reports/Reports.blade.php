@extends('layout.Master')
@section('content')

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 ">
                <a href="" type="button" class="btn btn-primary mb-2 float-right" data-toggle="modal" data-target="#addreport">Add Report</a>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="addreport" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Choose Report</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-auto">
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group-vertical mr-2" role="group" aria-label="First group">
                                    <a href="addreport" class="btn btn-secondary">Daily Report</a>
                                    <button type="button" class="btn btn-secondary">Over Booking Report</button>
                                    <button type="button" class="btn btn-secondary">Report B</button>
                                    <button type="button" class="btn btn-secondary">Report C</button>
                                    <button type="button" class="btn btn-secondary">Report D</button>
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Done</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <!-- Custom Tabs -->
                <div class="card">
                    <div class="p-2 d-flex justify-content-between align-items-center">
                        <ul class="nav nav-pills p-2">
                            <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">All Reports</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Pending</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Success</a></li>

                        </ul>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 100%;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                                <table class="table table-head-fixed text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID Report</th>
                                            <th>Jenis Report</th>
                                            <th>Customers</th>
                                            <th>Produk</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>10000-xx</td>
                                            <td>Daily Report</td>
                                            <td><strong>Faza A.N</strong> </td>
                                            <td>Kredit Kendaraan</td>
                                            <td>Visit home's customer and bla bla</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td>
                                                <a href="" class="btn btn-info btn-sm">view</a>
                                                <a href="" class="btn btn-warning btn-sm">edit</a>
                                                <a href="" class="btn btn-danger btn-sm">delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10001-xx</td>
                                            <td>Over Booking Report</td>
                                            <td><strong>Faza A.N</strong> </td>
                                            <td>Kredit Kendaraan</td>
                                            <td>Visit home's customer and bla bla</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td>
                                                <a href="" class="btn btn-info btn-sm">view</a>
                                                <a href="" class="btn btn-warning btn-sm">edit</a>
                                                <a href="" class="btn btn-danger btn-sm">delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10002-xx</td>
                                            <td>Daily Report</td>
                                            <td><strong>Faza A.N</strong> </td>
                                            <td>Kredit Kendaraan</td>
                                            <td>Visit home's customer and bla bla</td>
                                            <td><span class="badge badge-success">Success</span></td>
                                            <td>
                                                <a href="" class="btn btn-info btn-sm">view</a>
                                                <a href="" class="btn btn-warning btn-sm">edit</a>
                                                <a href="" class="btn btn-danger btn-sm">delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10003-xx</td>
                                            <td>Daily Report</td>
                                            <td><strong>Faza A.N</strong> </td>
                                            <td>Kredit Kendaraan</td>
                                            <td>Visit home's customer and bla bla</td>
                                            <td><span class="badge badge-success">Success</span></td>
                                            <td>
                                                <a href="" class="btn btn-info btn-sm">view</a>
                                                <a href="" class="btn btn-warning btn-sm">edit</a>
                                                <a href="" class="btn btn-danger btn-sm">delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10004-xx</td>
                                            <td>Daily Report</td>
                                            <td><strong>Faza A.N</strong> </td>
                                            <td>Kredit Kendaraan</td>
                                            <td>Visit home's customer and bla bla</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td>
                                                <a href="" class="btn btn-info btn-sm">view</a>
                                                <a href="" class="btn btn-warning btn-sm">edit</a>
                                                <a href="" class="btn btn-danger btn-sm">delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10005-xx</td>
                                            <td>Over Booking Report</td>
                                            <td><strong>Faza A.N</strong> </td>
                                            <td>Kredit Kendaraan</td>
                                            <td>Visit home's customer and bla bla</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td>
                                                <a href="" class="btn btn-info btn-sm">view</a>
                                                <a href="" class="btn btn-warning btn-sm">edit</a>
                                                <a href="" class="btn btn-danger btn-sm">delete</a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_2">
                                <table class="table table-head-fixed text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID Report</th>
                                            <th>Jenis Report</th>
                                            <th>Customers</th>
                                            <th>Produk</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>10000-xx</td>
                                            <td>Daily Report</td>
                                            <td><strong>Faza A.N</strong> </td>
                                            <td>Kredit Kendaraan</td>
                                            <td>Visit home's customer and bla bla</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td>
                                                <a href="" class="btn btn-info btn-sm">view</a>
                                                <a href="" class="btn btn-warning btn-sm">edit</a>
                                                <a href="" class="btn btn-danger btn-sm">delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10001-xx</td>
                                            <td>Over Booking Report</td>
                                            <td><strong>Faza A.N</strong> </td>
                                            <td>Kredit Kendaraan</td>
                                            <td>Visit home's customer and bla bla</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td>
                                                <a href="" class="btn btn-info btn-sm">view</a>
                                                <a href="" class="btn btn-warning btn-sm">edit</a>
                                                <a href="" class="btn btn-danger btn-sm">delete</a>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>10004-xx</td>
                                            <td>Daily Report</td>
                                            <td><strong>Faza A.N</strong> </td>
                                            <td>Kredit Kendaraan</td>
                                            <td>Visit home's customer and bla bla</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td>
                                                <a href="" class="btn btn-info btn-sm">view</a>
                                                <a href="" class="btn btn-warning btn-sm">edit</a>
                                                <a href="" class="btn btn-danger btn-sm">delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10005-xx</td>
                                            <td>Over Booking Report</td>
                                            <td><strong>Faza A.N</strong> </td>
                                            <td>Kredit Kendaraan</td>
                                            <td>Visit home's customer and bla bla</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td>
                                                <a href="" class="btn btn-info btn-sm">view</a>
                                                <a href="" class="btn btn-warning btn-sm">edit</a>
                                                <a href="" class="btn btn-danger btn-sm">delete</a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_3">
                                <table class="table table-head-fixed text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID Report</th>
                                            <th>Jenis Report</th>
                                            <th>Customers</th>
                                            <th>Produk</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>10002-xx</td>
                                            <td>Daily Report</td>
                                            <td><strong>Faza A.N</strong> </td>
                                            <td>Kredit Kendaraan</td>
                                            <td>Visit home's customer and bla bla</td>
                                            <td><span class="badge badge-success">Success</span></td>
                                            <td>
                                                <a href="" class="btn btn-info btn-sm">view</a>
                                                <a href="" class="btn btn-warning btn-sm">edit</a>
                                                <a href="" class="btn btn-danger btn-sm">delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10003-xx</td>
                                            <td>Daily Report</td>
                                            <td><strong>Faza A.N</strong> </td>
                                            <td>Kredit Kendaraan</td>
                                            <td>Visit home's customer and bla bla</td>
                                            <td><span class="badge badge-success">Success</span></td>
                                            <td>
                                                <a href="" class="btn btn-info btn-sm">view</a>
                                                <a href="" class="btn btn-warning btn-sm">edit</a>
                                                <a href="" class="btn btn-danger btn-sm">delete</a>
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- ./card -->
            </div>

        </div>

    </div><!-- /.container-fluid -->

</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection