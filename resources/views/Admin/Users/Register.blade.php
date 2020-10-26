@extends('layouts.admin.app')

@section('content')
    <section class="content">
        <div class="box">
            <form id="form_daftar" action="{{ route('admin.register') }}" method="POST">
                @csrf
                <div class="box-body">
                    <section class="content">
                        <div class="row">
                                <div class="box box-primary">
                                    <div class="box-header with-border">
                                        <i class="fa fa-address-card"></i>
                                        <h3 class="box-title">Register User</h3>
                                    </div>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Nama Lengkap<span style="color: red"> *</span></label>
                                            <input name="nama" type="text" class="form-control"
                                                   placeholder="Nama Lengkap" value=""
                                                   required>
                                        </div>
                                        <div class="form-group">
                                            <label>Kode<span style="color: red"> *</span></label>
                                            <input name="kode" type="text" class="form-control"
                                                   placeholder="Kode" value=""
                                                   required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email<span style="color: red"> *</span></label>
                                            <input name="email" type="email" class="form-control"
                                                   placeholder="email@email.com"
                                                   value="" required>
                                        </div>
                                        <div class="form-group">
                                              <label>Phone<span style="color: red"> *</span></label>
                                            <input name="telphon" class="form-control"
                                              type="text"  id="phone-number" placeholder="0812-3456-7890"  >
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat<span style="color: red"> *</span></label>
                                            <textarea name="alamat" type="text" class="form-control"
                                                      style="resize: none"
                                                      placeholder="Alamat"
                                                      required></textarea>
                                        </div>
                                         <div class="form-group">
                                            <label>Password<span style="color: red"> *</span></label>
                                            <input name="password" type="password" class="form-control"
                                                   placeholder="Password"
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
{{-- <script type="text/javascript">
    new QRCode(document.getElementById("qrcode"), "http://jindo.dev.naver.com/collie");
</script> --}}
{{-- <script>
    /* JS comes here */
    var qr;
(function () {
    qr = new QRious({
        element: document.getElementById('qr-code'),
        size: 200,
        value: 'https://studytonight.com'
    });
})();

function generateQRCode() {
    var qrtext = document.getElementById("qr-text").value;
    document.getElementById("qr-result").innerHTML = "QR code for " + qrtext + ":";
    alert(qrtext);
    qr.set({
        foreground: 'black',
        size: 200,
        value: qrtext
    });
}
<script> --}}
@endpush
