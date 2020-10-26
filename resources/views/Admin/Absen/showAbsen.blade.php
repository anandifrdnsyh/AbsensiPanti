@extends('layouts.admin.app')

@section('content')
<section class="content ">
    <div class="box">
        <form id="form_daftar" action="{{ route('admin.addAbsen') }}" method="POST">
            @csrf
            <div class="box-body">
                <section class="content">
                    <div class="row">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <i class="fa fa-address-card"></i>
                                <h3 class="box-title">Absen User</h3>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Kehadiran</label>
                                    <select name="status" class="form-control">
                                        <option value="1">Hadir</option>
                                        <option value="2">Tidak Hadir</option>
                                        <option value="3">Sakit</option>
                                        <option value="4">Cuti</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal<span style="color: red"> *</span></label>
                                    <input name="tanggal" type="date" class="form-control" placeholder=""
                                        value="" required>
                                </div>
                                <div class="form-group">
                                    <input name="user" type="hidden" class="form-control" placeholder=""
                                        value="{{ $user->id }}" required>
                                </div>
                                <div class="box-body">
                                    <button type="submit" class="btn btn-primary pull-right" form="form_daftar">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </form>
    </div>
</section>
@endsection
@push('script')
<script src="{{ asset('/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

<script>
    $(function () {
        $('#table_admin').DataTable()
    })
</script>
@endpush