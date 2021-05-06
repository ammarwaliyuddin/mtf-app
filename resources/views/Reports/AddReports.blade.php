@extends('layout.Master')
@section('content')


<!-- Main content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">

            <div class="col-12 col-lg-6">
                <!-- general form elements -->
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Add Report</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="JenisReport">Jenis Report</label>
                                <input type="text" class="form-control" id="JenisReport" placeholder="Enter email" value="Daily Report" readonly>
                            </div>
                            <div class="form-group">
                                <label for="Customers">Customers</label>
                                <select class="form-control" id="Customers">
                                    <option>Ammar</option>
                                    <option>Faza A.N</option>
                                    <option>Anis</option>
                                    <option>Helen</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Produk">Produk</label>
                                <select class="form-control" id="Produk">
                                    <option>Kredit Kendaraan</option>
                                    <option>Kredit Rumah</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="NoTagihan">No Tagihan</label>
                                <select class="form-control" id="NoTagihan">
                                    <option>10000-XX</option>
                                    <option>10001-XX</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Ket">Keterangan</label>
                                <input type="text" class="form-control" id="Ket" placeholder="Keterangan">
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Add</button>
                            <a href="reports" class="btn btn-primary">Cancel</a>
                        </div>
                    </form>
                </div>
                <!-- /.card -->

            </div>

        </div>

    </div><!-- /.container-fluid -->

</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection