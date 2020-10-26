 @extends('layouts.admin.app')

 @section('content')
 <section class="content ">
     <div class="box">
         <form id="form_daftar" action="{{ route('admin.filterAbsen') }}" method="POST">
             @csrf
             <div class="box-body">
                 <section class="content">
                     <div class="row">
                         <div class="box box-primary">
                             <div class="box-header with-border">
                                 <i class="fa fa-address-card"></i>
                                 <h3 class="box-title">Laporan Absen</h3>
                             </div>
                             <div class="box-body">
                                 <div class="form-group">
                                     <label>Tahun<span style="color: red"> *</span></label>
                                     <select style="cursor:pointer;" class="form-control" id="tag_select" name="year">
                                         <option value="0" selected disabled> Pilih Tahun</option>
                                         <?php
                                                            $year = date('Y');
                                                            $min = $year - 60;
                                                            $max = $year;
                                                            for( $i=$max; $i>=$min; $i-- ) {
                                                            echo '<option value='.$i.'>'.$i.'</option>';
                                                            }?>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label>Bulan<span style="color: red"> *</span></label>
                                     <select style="cursor:pointer;margin-top:1.5em;margin-bottom:1.5em;"
                                         class="form-control" id="tag_select" name="month">
                                         <option value="0" selected disabled> Pilih Bulan</option>
                                         <option value="01"> Januari</option>
                                         <option value="02"> Februari</option>
                                         <option value="03"> Maret</option>
                                         <option value="04"> April</option>
                                         <option value="05"> Mei</option>
                                         <option value="06"> Juni</option>
                                         <option value="07"> Juli</option>
                                         <option value="08"> Agustus</option>
                                         <option value="09"> September</option>
                                         <option value="10"> Oktober</option>
                                         <option value="11"> November</option>
                                         <option value="12"> Desember</option>
                                     </select>
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

     <div class="box">
         <div class="box-header with-border">
             <div class="card-body">
                 <h3 class="box-title">Laporan User</h3>
                 <div class="card-body  pull-right">
                     <a href="{{ route('admin.filterAbsenexport') }}">
                         <button type="button" class="btn btn-block btn-danger">Export</button>
                     </a>
                 </div>
             </div>
         </div>
         <div class="box-body">
             <table id="table_admin" class="table table-bordered table-striped dataTable">
                 <thead>
                     <tr>
                         <th>No</th>
                         <th>Nama</th>
                         <th>Email</th>
                         <th>Tanggal</th>
                         <th style="text-align: center;">Kehadiran</th>
                         <th style="text-align: center;">Jam Masuk</th>
                         <th style="text-align: center;">Jam Keluar</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($absens as $absen)
                     <tr>
                         <td >{{ $a++ }}</td>
                         <td>{{  $absen->user }}</td>
                         <td>{{ $absen->email }}</td>
                         <td>{{ date('l, d F Y', strtotime($absen->tanggal)) }}</td>
                       @if ($absen->status_absen_id == 1)
                                 <td style="text-align: center;"><span class="label label-success">Masuk</span></td>
                        @endif
                        @if ($absen->status_absen_id == 2)
                                <td style="text-align: center;"><span class="label label-danger">Tidak Masuk</span></td>
                        @endif
                        @if ($absen->status_absen_id == 3)
                                <td style="text-align: center;"><span class="label label-warning">Sakit</span></td>
                        @endif
                        @if ($absen->status_absen_id == 4)
                                 <td style="text-align: center;"><span class="label label-primary">Cuti</span></td>
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
 <script>
     $(function () {
         $('#table_admin').DataTable()
     })
 </script>
 @endpush