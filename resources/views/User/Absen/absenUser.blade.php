   @extends('layouts.user.app')

   @section('content')
   <section class="content">
       <div class="box box-primary">
        <div class="box-header with-border">
               <h3 class="box-title">Absen Karyawan </h3>
        </div>
            <div class="text-center">
                <h1>ABSEN QR CODE</h1>
                <video width="320" height="240" id="preview"></video>
            </div>
            <form id="form_daftar" action="{{ route('user.absenUser') }}" method="POST">
                @csrf
               <div class="box-body">
                 <div class="form-group">
                  <input type="hidden" name="kode" class="form-control" id="data" placeholder="Kode">
                </div>
            </div>
            <div class="box-body">
                 <div class="form-group">
                  <input type="hidden" name="id" class="form-control"  placeholder="id" value="{{ $user->id }}">
                </div>
            </div>
               <div class="box-footer">
                   <button id="btn" type="submit" class="btn btn-primary" style="display:none;">Submit</button>
               </div>
           </form>
       </div>
   </section>
   @endsection

   @push('script')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

 <script type="text/javascript">
      let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });

      scanner.addListener('scan', function (content) {
        document.getElementById("data").value=content;
        document.getElementById("btn").click();
      });

      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        } else {
          console.error('No cameras found.');
        }
      }).catch(function (e) {
        console.error(e);
      });
    </script>
   @endpush