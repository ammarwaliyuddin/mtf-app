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
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card bg-light d-flex flex-fill">
                        <!-- <div class="card-header text-muted border-bottom-0">
                            Digital Strategist
                        </div> -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5 col-lg-4 text-center">
                                    <img src="{{ asset('../../AdminLTE/dist/img/user4-128x128.jpg')}}" alt="user-avatar" class="img-circle img-fluid">
                                </div>
                                <div class="col-md-7 col-lg-8">
                                    <h2 class="lead"><b>FAZA AINUN NAFISAH</b></h2>
                                    <p class="text-muted text-sm"><b>About: </b> Sales Lead / Coffee Lover </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: 457 1st, Malang, PD - 44556-9870</li>
                                        <li class="small mt-1"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: +62 8111225562</li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="card bg-light d-flex flex-fill">
                        <!-- <div class="card-header text-muted border-bottom-0">
                            Digital Strategist
                        </div> -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-between">
                                    <p class="d-inline">Jadwal Kerja</p>
                                    <p class="d-inline">12 Mei 2021</p>
                                </div>
                                <div class="col-12">
                                    <h1 class="text-center font-weight-bold"> 07.00-16.00</h1>
                                    <p class="text-center">Office Hour</p>
                                </div>
                                <div class="col-12 border-top border-bottom py-4 text-center">
                                    <i class="fas fa-lg fa-building " style="width: 20px;"></i>
                                    <p class="d-inline-block m-0 ">Address: 457 1st, Malang, PD - 44556-9870</p>
                                </div>
                                <div class="col-12 mt-3 d-flex justify-content-around">
                                    <button type="button" id="myBtn" class="btn btn-success swalDefaultSuccess">
                                        Clock In
                                    </button>
                                    <button type="button" id="myBtn" class="btn btn-warning" data-toggle="modal" data-target="#clockOut">
                                        Clock Out
                                    </button>
                                </div>
                                <div class="col-12">
                                    <a href="" class="stretched-link" data-toggle="modal" data-target="#applyLeave">Apply Leave</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div><!-- /.container-fluid -->

    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- modal clock out -->
<div class="modal fade" id="clockOut" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Clock Out</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-12">
                            <!-- checkbox -->
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">New Customer</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">Visit Customer</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">Searching Customer</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">Advertise Product</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">Reach The Target</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">Others</label>

                                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary swalClockOut" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>

<!-- modal apply leave -->
<div class="modal fade" id="applyLeave" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apply Leave</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Date range:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control float-right" id="reservation">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- checkbox -->
                            <div class="form-group">
                                <p class="m-0">Reason :</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">Sick</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">Emergency</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">Vacation</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">Others</label>

                                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary " data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="{{asset('../../AdminLTE/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- InputMask -->
<script src="{{ asset('../../AdminLTE/plugins/moment/moment.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{ asset('../../AdminLTE/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('../../AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script>
    $(function() {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        $('.swalDefaultSuccess').click(function() {
            Toast.fire({
                icon: 'success',
                title: '06:47:32<br>Clock In'
            })
        });
        $('.swalClockOut').click(function() {
            Toast.fire({
                icon: 'success',
                title: '17:47:32<br>Clock Out'
            })
        });
        $('#reservation').daterangepicker()
    });
</script>


@endsection