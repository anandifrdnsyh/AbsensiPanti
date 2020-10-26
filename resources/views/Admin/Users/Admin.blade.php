@extends('layouts.admin.app')

@section('content')
<section class="content ">
    <div class="box">
        <div class="box-header with-border">
            <div class="card-body">
                <h3 class="box-title">Data Admin</h3>
            </div>
        </div>
        <div class="box-body">
            <table id="table_admin" class="table table-bordered table-striped dataTable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Phone</th>
                        <th>QrCode</th>
                        <th style="width: 50px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataAdmin as $admin)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $admin->nama }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>{{ $admin->alamat }}</td>
                        <td>{{ $admin->telphon }}</td>
                        <td style="text-align: center "><img width="100px" src="{{ url($admin->qrcode) }}"></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="" class="btn" style="padding: 3px"><i class="fa fa-eye"></i></a>
                                <a href="" class="btn" style="padding: 3px"><i class="fa fa-pencil"></i></a>
                            </div>
                        </td>
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
