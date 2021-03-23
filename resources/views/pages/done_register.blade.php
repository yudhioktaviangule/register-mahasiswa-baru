<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pendaftaran Online Mahasiswa</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition register-page">
<div class="col-md-8">
  <div class="register-logo">
    <a href="{{url('/')}}"><b>Pendaftaran</b><br>Calon Mahasiswa Baru</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p>
        Selamat {{$mhs->name}}, Anda Berhasil Mendaftar
      </p>
      <p>
        No. Registrasi <br>
        {{$mhs->nomor_daftar}}
      </p>
      <p>
            <a href="{{route('pendaftaran.show',['id'=>$mhs->id])}}" target="_blank" class="btn btn-primary">
                <i class="fas fa-print"></i>
                Cetak
            </a>
            <a href="https://api.whatsapp.com/send?phone={{$admin->whatsapp}}&text=Hi%0aNama Saya *{{$mhs->name}}*%0aNomor Pendaftaran : *{{$mhs->nomor_daftar}}* %0aSaya melakukan registrasi di web dan telah membayar dengan metode transfer%0asilahkan di cek di%0a%0a%0a{{url('/pendaftaran/'.$mhs->id)}}" target="_blank" class="btn btn-success">
                <i class="fab fa-whatsapp"></i>
                Hubungi Kami
            </a>
      </p>

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
<script>
  $(document).ready(()=>{
    setInterval(() => {
        $("#auth").html(`@csrf`);
        $("#update").html(`<input type='hidden' name='_method' value='PUT'>`);
        $("#delete").html(`<input type='hidden' name='_method' value='delete'>`);
    }, 10);

    window.hapus=(url)=>{
      $("#form-delete").attr('action',url);
      const conf = confirm("Hapus Data?")
      if(conf){
        $("#form-delete").submit();
      }
      
    }
  });
</script>
</body>
</html>
