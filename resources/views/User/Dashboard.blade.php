@extends('layouts.user.app')

@section('content')
<section class="content">
    <div class="row">

        <div class="col-lg-4 col-xs-12">
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <h3 class="profile-username text-center">{{$user->nama}}</h3>
                    <p class="text-muted text-center">Karyawan</p>
                    <img style="margin-bottom: 5%" class="profile-user-img img-responsive img-fluid"
                        src="{{ url($user->qrcode) }}" alt="User Qr Code">
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Email</b> <a class="pull-right">{{ $user->email }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Alamat</b> <a class="pull-right">{{ $user->alamat }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Phone</b> <a class="pull-right">{{ $user->telphon }}</a>
                        </li>
                    </ul>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
        <div class="col-lg-4 col-xs-12">
            <div class="box box-solid bg-green-gradient">
                <div class="box-header">
                    <i class="fa fa-calendar"></i>
                    <h3 class="box-title">Calendar</h3>
                    <div class="pull-right box-tools">
                        <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i
                                class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body no-padding">
                    <div id="calendar" style="width: 100%"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-xs-12">
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <p class="text-center">
                        <strong>Total Absen Dalam Perbulan</strong>
                    </p>
                    <div class="progress-group">
                        <span class="progress-text">Kehadiran</span>
                        <span class="progress-number">
                            <b>
                                {{ $detailkehadiran }}
                            </b>/Bulan</span>
                        <div class="progress sm">
                            <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                        </div>
                    </div>
                    <!-- /.progress-group -->
                    <div class="progress-group">
                        <span class="progress-text">Tidak Hadir</span>
                        <span class="progress-number"><b>{{ $detailtidakhadir }}</b>/Bulan</span>

                        <div class="progress sm">
                            <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                        </div>
                    </div>
                    <!-- /.progress-group -->
                    <div class="progress-group">
                        <span class="progress-text">Sakit</span>
                        <span class="progress-number"><b>{{ $detailsakit }}</b>/Bulan</span>

                        <div class="progress sm">
                            <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                        </div>
                    </div>
                    <!-- /.progress-group -->
                    <div class="progress-group">
                        <span class="progress-text">Cuti</span>
                        <span class="progress-number"><b>{{ $detailcuti }}</b>/Bulan</span>

                        <div class="progress sm">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                        </div>
                    </div>
                    <!-- /.progress-group -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('script')
<script src="{{ asset('adminlte/bower_components/chart.js/Chart.js') }}"></script>
<script src="{{ asset('js/DataAdminDashboard.js') }}"></script>
<script>
    $('#calendar').datepicker("setDate", moment().format('MM/DD/YYYY'));
</script>
@endpush