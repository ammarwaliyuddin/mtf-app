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
                        <h3 class="card-title">Add Customer</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="Name">Name</label>
                                <input type="text" class="form-control" id="Name" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="Produk">Produk</label>
                                <select class="form-control" id="Produk">
                                    <option>Kredit Rumah</option>
                                    <option>Kredit Mobil</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Ket">Keterangan</label>
                                <input type="text" class="form-control" id="Ket" placeholder="Enter Keterangan">
                            </div>
                            <div class="form-group">
                                <label for="T_Pembayaran">Total Pembayaran</label>
                                <input type="text" class="form-control" id="T_Pembayaran" placeholder="Enter Total pembayaran">
                            </div>
                            <div class="form-group">
                                <label for="Tagihan">Tagihan/bulan</label>
                                <input type="text" class="form-control" id="Tagihan" placeholder="Enter Tagihan">
                            </div>
                            <div class="form-group">
                                <label for="Alamat">Alamat</label>
                                <input type="text" class="form-control" id="Alamat" placeholder="Enter Alamat">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Add</button>
                            <a href="customers" class="btn btn-primary">Cancel</a>
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