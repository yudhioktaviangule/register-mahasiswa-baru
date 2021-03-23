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
      

      <form action="{{route('registrasi.store')}}" method="post">
        <div class="row">
            <div class="col">
                <p class="login-box-msg">Info Mahasiswa</p>
                <div class="input-group mb-3">
                    <input required type="text" class="form-control" placeholder="Nama Lengkap" maxlength="40" name="name">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-user"></span>
                        </div>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <select required name="kelamin" id="" class="form-control">
                        <option value="L">Laki Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                    <div class="input-group-append">
                        <div class="input-group-text text-pink">
                        <span class="fas fa-venus-mars"></span>
                        </div>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <input required type="number" class="form-control" placeholder="Tinggi Badan(cm)" maxlength="20"  min=100 name="tinggi">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-ruler"></span>
                        </div>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <input required type="number" class="form-control" placeholder="Berat Badan(KG)" maxlength="20" step=10 min=30 name="berat">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-ruler"></span>
                        </div>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <input required type="text" class="form-control" placeholder="Tempat Lahir" maxlength="20" name="tempat_lahir">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-map-marked"></span>
                        </div>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <input required type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir">
                </div>
            </div>
            <div class="col">
                <p class="login-box-msg">Info Alamat</p>
                <div class="input-group mb-3">
                <input required type="text" class="form-control" placeholder="Alamat"  name="alamat">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-map-marked"></span>
                    </div>
                </div>
                </div>
                <div class="input-group mb-3">
                <input required type="tel" class="form-control" placeholder="Telepon"  name="telepon">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-mobile-alt"></span>
                    </div>
                </div>
                </div>
                <div class="input-group mb-3">
                <input required type="tel" class="form-control" placeholder="Kode Pos"  name="kode_pos">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-mail-bulk"></span>
                    </div>
                </div>
                </div>
            
            </div>
            <div class="col">
                <p class="login-box-msg">Berkas</p>
                <div class='form-group'>
                    <label for='foto'>Soft-copy Foto 4x6</label>
                    <input required placeholder='Input File Foto' type='file' class='form-control' id='foto' name='foto'>
                </div>
                <div class='form-group'>
                    <label for='ijazah'>Soft-copy Ijazah dilegalisir</label>
                    <input required placeholder='Input File Ijazah' type='file' class='form-control' id='ijazah' name='ijazah'>
                </div>
                <div class='form-group'>
                    <label for='ijazah'>Soft-copy DANUM</label>
                    <input required placeholder='Input File Ijazah' type='file' class='form-control' id='ijazah' name='ijazah'>
                </div>
            
            </div>
        </div>
        
        <div class="row">
          <div class="col-8">
            
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


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
</body>
</html>
