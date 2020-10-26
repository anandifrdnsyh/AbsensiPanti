 @extends('layouts.admin.app')

@section('content')
<section class="content ">
    <div class="box">
        <div class="box-header with-border">
            <div class="card-body">
                <h3 class="box-title">Data Laporan Absen</h3>
                <div class="card-body  pull-right">
                    <a href="{{ route('admin.showAbsen', ['id' => $user->id]) }}">
                        <button type="button" class="btn btn-block btn-primary">Tambah</button>
                    </a>

                </div>
            </div>
        </div>
        <div class="box-body">
            <table id="table_admin" class="table table-bordered table-striped dataTable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Tnggal</th>
                        <th>Absen</th>
                        <th>Jam Masuk</th>
                        <th>Jam Keluar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($absens as $absen)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $absen->nama}}</td>
                        <td>{{ $absen->tanggal }}</td>
                         @if ($absen->status_absen_id == 1)
                                 <td ><span class="label label-success">Masuk</span></td>
                        @endif
                        @if ($absen->status_absen_id == 2)
                                <td ><span class="label label-danger">Tidak Masuk</span></td>
                        @endif
                        @if ($absen->status_absen_id == 3)
                                <td ><span class="label label-warning">Sakit</span></td>
                        @endif
                        @if ($absen->status_absen_id == 4)
                                 <td><span class="label label-primary">Cuti</span></td>
                        @endif
                         @if ($absen->jam_masuk == null )
                            <td style="text-align: center;"> <b> - </b>  </td>
                        @else
                            <td style="text-align: center;">{{ $absen->jam_masuk }}</td>
                        @endif
                        @if ($absen->jam_keluar == null )
                            <td style="text-align: center;"> <b> - </b>  </td>
                        @else
                            <td style="text-align: center;">{{ $absen->jam_keluar }}</td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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
