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
      

      <form id="pmb-form"  action="{{route('registrasi.store')}}" method="post" enctype="multipart/form-data">
        <div id="auth"></div>
        @if($errors->any())
        <div class="row">
            <div onclick="reloadWin()" class="col-12 col-md-12 alert alert-danger">
                <ul>
                    @foreach($errors->all() as $err => $value)
                        <li>{{ $value }}</li>
                    @endforeach
                </ul>

            </div>
        </div>
        @endif
        <div class="row">
        <div class="col">
            <p class="login-box-msg">Info Mahasiswa</p>
            <div class="input-group mb-3">
                <input required type="text" class="form-control" readonly placeholder="Nama Akademi" maxlength="40" name="nama_akademi" value="Akademi Kebidanan Buton Raya">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-building"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input required type="text" class="form-control" placeholder="Nama Lengkap" maxlength="40" name="name">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input required type="email" class="form-control" placeholder="Email"  name="email">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input required type="text" class="form-control" placeholder="Nomor Identitas Kependudukan" maxlength="16" name="nik">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-id-card"></span>
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
                <select required name="kewarganegaraan" id="" class="form-control">
                    <option value="wni">WARGA NEGARA INDONESIA</option>
                    <option value="wna">WARGA NEGARA ASING</option>
                </select>
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-globe-asia"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <select required name="agama" id="" class="form-control">
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="katolik">Katholik</option>
                    <option value="hindu">Hindu</option>
                    <option value="buddha">Buddha</option>
                </select>
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-globe-asia"></span>
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
                <input required type="number" class="form-control" placeholder="Berat Badan(KG)" maxlength="20" step=1 min=30 name="berat">
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
                <div class="input-group mb-3">
                <input required type="text" class="form-control" placeholder="Sekolah Asal" maxlength="20"  min=100 name="sekolah_asal">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-school"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input required type="text" class="form-control" placeholder="Alamat Sekolah Asal" maxlength="20"  min=30 name="alamat_sekolah">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-school"></span>
                    </div>
                </div>
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
            <input required type="tel" class="form-control" maxlength="5" placeholder="Kode Pos"  name="kode_pos">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-mail-bulk"></span>
                </div>
            </div>
            </div>
        
            <p class="login-box-msg">Berkas</p>
            <div class='form-group'>
                <label for='foto'>Soft-copy Foto 4x6</label>
                <input required placeholder='Input File Foto' type='file' class='form-control' id='foto' name='foto'>
                
            </div>
            <div class='form-group'>
                <label for='ijazah'>Soft-copy Kartu Identitas</label>
                <input required placeholder='Input danum' type='file' class='form-control' id='ijazah' name='ktp'>
            </div>
            <p class="login-box-msg">Info Orang tua</p>
            <div class="input-group mb-3">
                <input required type="text" class="form-control" placeholder="Nama Ibu Kandung" maxlength="40" name="ibu_kandung">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-female"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input required type="text" class="form-control" placeholder="No. Telepon Ibu " maxlength="12" name="telepon_ibu">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-telephone"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input required type="text" class="form-control" placeholder="Nama Ayah Kandung" maxlength="40" name="ayah_kandung">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input required type="text" class="form-control" placeholder="No. Telepon Ayah" maxlength="12" name="telepon_ayah">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-telephone"></span>
                    </div>
                </div>
            </div>
            <p class="login-box-msg">Info Pekerjaan Orang tua</p>
            <div class="input-group mb-3">
                <input required type="text" class="form-control" placeholder="Pekerjaan Ibu" maxlength="40" name="pekerjaan_ibu">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-female"></span>
                    </div>
                </div>
            </div>
            
            <div class="input-group mb-3">
                <input required type="text" class="form-control" placeholder="Pekerjaan Ayah" maxlength="40" name="pekerjaan_ayah">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>

        </div>
        </div>
        
        <div class="row">
          <div class="col-8">
            
          </div>
          <!-- /.col -->
          <div class="col-4 text-right" id="btn-container">
            <button class="btn btn-primary btn-sm">Register</button>
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
<script>
  $(document).ready(()=>{
    window.onChangeFile = (obj)=>{
        const file = obj[0].files[0]
        if(file.size>1999999){
            return false
        }else{
            return true
        }
    }
    $("#pmb-form").submit(()=>{
        const cek = onChangeFile($("#foto"))
        const lek = onChangeFile($("#ijazah"))
        if(cek&&lek){
            return true
        }else{
            alert("Ukuran Upload File Minimal 2 MB")
            return false
        }

    })
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
    window.reloadWin=()=>{
        location.reload()
    }
  });
</script>
</body>
</html>
