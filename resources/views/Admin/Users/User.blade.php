 @extends('layouts.admin.app')

@section('content')
    <section class="content ">
        <div class="box">
            <div class="box-header with-border">
                <div class="card-body">
                    <h3 class="box-title">Data User</h3>
                     <div class="card-body  pull-right">
                    <a href="{{ route('admin.showRegister') }}">
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
                        <th>Kode</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Phone</th>
                        <th>Qrcode</th>
                        <th style="width: 50px;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($dataUser as $user)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $user->nama }}</td>
                            <td>{{ $user->kode }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->alamat }}</td>
                            <td>{{ $user->telphon }}</td>
                            <td><img width="100px" src="{{ url($user->qrcode) }}"></td>
                             <td class="text-center">
                                <div class="btn-group">
                                    <a href="" class="btn" style="padding: 3px"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('admin.showEditUser', ['id' => $user->id]) }}" class="btn"
                                    style="padding: 3px"><i
                                            class="fa fa-pencil"></i></a>
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
    <script>
        $(function () {
            $('#table_admin').DataTable()
        })
    </script>
@endpush
