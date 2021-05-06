@extends('layout.Master')
@section('content')
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 ">
                <a href="addcustomer" type="button" class="btn btn-primary mb-2 float-right">Add Customer</a>
            </div>

            <div class="col-12">
                <!-- Custom Tabs -->
                <div class="card">
                    <div class="p-2 d-flex justify-content-between align-items-center">
                        <ul class="nav nav-pills p-2">
                            <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">All Customers</a></li>
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
                                            <th>Name</th>
                                            <th>Produk</th>
                                            <th>No Tagihan</th>
                                            <th>Tagihan</th>
                                            <th>Pembayaran</th>
                                            <th>jatuh Tempo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>Faza A.N</strong> </td>
                                            <td>
                                                <p>Kredit Kendaraan</p>
                                                <p>Kredit Rumah</p>
                                            </td>
                                            <td>
                                                <p>PDX-XXX-01</p>
                                                <p>PDX-XXX-01</p>
                                            </td>
                                            <td>
                                                <p>Rp. 5.000.000</p>
                                                <p>Rp. 6.000.000</p>
                                            </td>
                                            <td>
                                                <p>Rp. 5.000.000</p>
                                                <p>Rp. 6.000.000</p>
                                            </td>
                                            <td>
                                                <p>2021/04/23</p>
                                                <p>2021/04/23</p>
                                            </td>
                                            <td>
                                                <a href="addproduct" class="btn btn-primary btn-sm">add</a>
                                                <a href="" class="btn btn-warning btn-sm">edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Faza A.N</strong> </td>
                                            <td>
                                                <p>Kredit Kendaraan</p>
                                                <p>Kredit Rumah</p>
                                            </td>
                                            <td>
                                                <p>PDX-XXX-01</p>
                                                <p>PDX-XXX-01</p>
                                            </td>
                                            <td>
                                                <p>Rp. 5.000.000</p>
                                                <p>Rp. 6.000.000</p>
                                            </td>
                                            <td>
                                                <p>Rp. 5.000.000</p>
                                                <p>Rp. 6.000.000</p>
                                            </td>
                                            <td>
                                                <p>2021/04/23</p>
                                                <p>2021/04/23</p>
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-primary btn-sm">add</a>
                                                <a href="" class="btn btn-warning btn-sm">edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Faza A.N</strong> </td>
                                            <td>
                                                <p>Kredit Kendaraan</p>
                                                <p>Kredit Rumah</p>
                                            </td>
                                            <td>
                                                <p>PDX-XXX-01</p>
                                                <p>PDX-XXX-01</p>
                                            </td>
                                            <td>
                                                <p>Rp. 5.000.000</p>
                                                <p>Rp. 6.000.000</p>
                                            </td>
                                            <td>
                                                <p>Rp. 5.000.000</p>
                                                <p>Rp. 6.000.000</p>
                                            </td>
                                            <td>
                                                <p>2021/04/23</p>
                                                <p>2021/04/23</p>
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-primary btn-sm">add</a>
                                                <a href="" class="btn btn-warning btn-sm">edit</a>
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