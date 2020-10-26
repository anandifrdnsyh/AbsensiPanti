@extends('layouts.admin.app')

@section('content')
    <section class="content">
        <div class="box">
            <form id="form_daftar" action="{{ route('admin.editUser') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <section class="content">
                        <div class="row">
                                <div class="box box-primary">
                                    <div class="box-header with-border">
                                        <i class="fa fa-address-card"></i>
                                        <h3 class="box-title">Edit User</h3>
                                    </div>
                                    <input type="hidden" name="id" value="{{ $dataUser->id }}">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Nama Lengkap<span style="color: red"> *</span></label>
                                            <input name="nama" type="text" class="form-control"
                                                   placeholder="Nama Lengkap" value="{{ $dataUser->nama }}"
                                                   required>
                                        </div>
                                        <div class="form-group">
                                            <label>Kode<span style="color: red"> *</span></label>
                                            <input name="kode" type="text" class="form-control"
                                                   placeholder="Kode" value="{{ $dataUser->kode }}"
                                                   required>
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar QrCode<span style="color: red"> *</span></label>
                                            <input name="file" type="file" class="form-control"
                                                   placeholder="Kode" value=""
                                                   required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email<span style="color: red"> *</span></label>
                                            <input name="email" type="email" class="form-control"
                                                   placeholder="email@email.com"
                                                   value="{{ $dataUser->email }}" required>
                                        </div>
                                        <div class="form-group">
                                              <label>Phone<span style="color: red"> *</span></label>
                                            <input name="telphon" class="form-control"
                                              type="text"  id="phone-number" placeholder="0812-3456-7890" value="{{ $dataUser->telphon }}" >
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat<span style="color: red"> *</span></label>
                                            <textarea  name="alamat" type="text" class="form-control"
                                                      style="resize: none"
                                                      placeholder="Alamat"
                                                      required>{{$dataUser->alamat }}</textarea>
                                        </div>
                                         <div class="form-group">
                                            <label>Password<span style="color: red"> *</span></label>
                                            <input name="password" type="password" class="form-control"
                                                   placeholder="Password" value=""
                                                   required>
                                        </div>
                                         <div class="form-group">
                                            <label>Konfirmasi Password<span style="color: red"> *</span></label>
                                            <input name="konfirmasipassword" type="password" class="form-control"
                                                   placeholder="Konfirmasi Password"
                                                   required>
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
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
    $('#phone-number').mask('0000-0000-0000');
    })
</script>
@endpush
