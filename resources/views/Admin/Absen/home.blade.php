 @extends('layouts.admin.app')

 @section('content')
 <section class="content ">
     <div class="box">
         <div class="box-header with-border">
             <div class="card-body">
                 <h3 class="box-title">Data Absen</h3>
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
                         <td><img width="100px" src="{{ url($user->qrcode ?? '') }}" alt="User picture"></td>
                         <div class="btn-group">
                             <td class="text-center"><a href="{{ route('admin.absenDetail', ['id' => $user->id]) }}"
                                     class="btn"><i class="fa fa-eye"></i></a>
                             </td>
                         </div>
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