@extends('layout/master')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header ">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Sales MTF</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <!-- Profile Image -->
                    <div class="card card-danger card-outline">
                        <div class="dropdown text-right mt-2 mr-2">
                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-info-circle"></i> how to get a star
                            </button>
                            <div class="dropdown-menu p-2" aria-labelledby="dropdownMenuButton">
                                <h6 class="m-0"><strong>Cara Mendapatkan Bintang</strong></h6>
                                <hr>
                                <p><strong>Bintang 1 :</strong> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima, eligendi!</p>
                                <p><strong>Bintang 2 :</strong> Lorem ipsum dolor sit amet consectetur.</p>
                                <p><strong>Bintang 3 :</strong> Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                <p><strong>Bintang 4 :</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <p><strong>Bintang 5 :</strong> Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                            </div>
                        </div>
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" style="width: 200px;" src="{{ asset('../../AdminLTE/dist/img/user4-128x128.jpg')}}" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center mb-1">Faza Ainun Nafisah</h3>
                            <p class="text-muted text-center mb-1">Sales Lead</p>
                            <div class="div text-center mb-2">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-secondary"></i>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">About</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong>Unit Detail</strong>
                            <p class="text-muted my-2"><i class="fas fa-user-alt mr-1 text-center" style="width: 40px;"></i>Faza Ainun Nafisah</p>
                            <p class="text-muted my-2"><i class="fas fa-mobile-alt mr-1 text-center" style="width: 40px;"></i>08111225562</p>
                            <p class="text-muted my-2"><i class="fas fa-envelope mr-1 text-center" style="width: 40px;"></i>fazanafisah@yahoo.com</p>
                            <p class="text-muted my-2"><i class="fas fa-birthday-cake mr-1 text-center" style="width: 40px;"></i>27 Oktober 1998</p>
                            <hr>
                            <strong>Work</strong>
                            <p class="text-muted my-2"><i class="fas fa-address-card mr-1 text-center" style="width: 40px;"></i>Sales 1</p>
                            <p class="text-muted my-2"><i class="fas fa-building mr-1 text-center" style="width: 40px;"></i>MTF Cabang 1 Malang</p>
                            <hr>
                            <strong>Address</strong>
                            <p class="text-muted my-2"><i class="fas fa-map-marker-alt mr-1 text-center" style="width: 40px;"></i>457 1st, Malang, PD - 44556-9870</p>





                        </div>
                        <!-- /.card-body -->
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