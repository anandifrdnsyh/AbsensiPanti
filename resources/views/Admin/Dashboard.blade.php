@extends('layouts.admin.app')

@section('content')
<section class="content">
    <div class="row">

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{ $count['user'] }}</h3>
                    <p>USER</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{ route('admin.userUser') }}" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
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