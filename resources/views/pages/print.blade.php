<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No Registrasi {{$mhs->nomor_daftar}}</title>
</head>
<body style="font-family:'Courier New', Courier, monospace">
    <table style="width:100%">
        <tr>
            <td><img src="{{asset('/img/kop_surat.png')}}" style="width: 100%;"></td>
        </tr>
   
    </table>
    <div style="width:100%">
        <table style="width:50%;margin-left:auto;margin-right:auto;margin-top:15px">
            <tr>
                <td>Nomor Register</td>
                <td>: {{$mhs->nomor_daftar}}</td>
            </tr>
            <tr>
                <td>Akademi</td>
                <td>: {{$mhs->nama_akademi}}</td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>: {{$mhs->nik}}</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: {{$mhs->name}}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: {{$mhs->kelamin=="L"? "Laki Laki" : "Perempuan"}}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>: {{strtoupper($mhs->agama)}}</td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
                <td>: {{strtoupper($mhs->kewarganegaraan)}}</td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>: {{$mhs->tempat_lahir}}, {{\Carbon\Carbon::parse($mhs->tanggal_lahir)->format('d-m-Y')}}</td>
            </tr>
            <tr>
                <td>Tinggi</td>
                <td>: {{$mhs->tinggi}} cm</td>
            </tr>
            <tr>
                <td>Berat</td>
                <td>: {{$mhs->berat}} kg</td>
            </tr>
            <tr>
                <td colspan="2">
                    <strong>Informasi Alamat</strong>
                </td>
                
            </tr>
            <tr>
                <td>Alamat Mahasiswa</td>
                <td>: {{$mhs->alamat}}</td>
            </tr>        
            <tr>
                <td>Telepon</td>
                <td>: {{$mhs->telepon}}</td>
            </tr>        
            <tr>
                <td>Kode Pos</td>
                <td>: {{$mhs->kode_pos}}</td>
            </tr>   
            <tr>
                <td colspan="2">
                    <strong>Informasi Sekolah Asal</strong>
                </td>
                
            </tr>
            <tr>
                <td>Nama Sekolah</td>
                <td>: {{$mhs->sekolah_asal}}</td>
            </tr>        
            <tr>
                <td>Alamat Sekolah</td>
                <td>: {{$mhs->alamat_sekolah}}</td>
            </tr>        
            <tr>
                <td>Kode Pos</td>
                <td>: {{$mhs->kode_pos}}</td>
            </tr>   
            <tr>
                <td colspan="2">
                    <strong>Informasi Orang Tua</strong>
                </td>
                
            </tr>  
            <tr>
                <td>Nama Ayah</td>
                <td>: {{$mhs->ayah_kandung}}</td>
            </tr>                      
            <tr>
                <td>Pekerjaan Ayah</td>
                <td>: {{$mhs->pekerjaan_ayah}}</td>
            </tr>                      
            <tr>
                <td>Nama Ibu</td>
                <td>: {{$mhs->ibu_kandung}}</td>
            </tr>                      
            <tr>
                <td>Pekerjaan Ibu</td>
                <td>: {{$mhs->pekerjaan_ibu}}</td>
            </tr>                      
            <tr>
                <td colspan="2">
                    <strong>Kelengkapan Berkas</strong>
                </td>
                
            </tr>  
            @php 
                $ft = public_path("mhs/foto/").$mhs->foto;
                $ktp = public_path("mhs/ktp/").$mhs->ktp;
                $ftx = file_exists($ft);
                $ktx = file_exists($ktp);
                $fturl = url("mhs/foto/")."/".$mhs->foto; 
                $kturl = url("mhs/ktp/")."/".$mhs->ktp; 
            @endphp
            <tr>
                <td>Foto</td>

                <td>: {{!$ftx ? "Belum Upload" : "OK"}}</td>
            </tr>                      
            <tr>
                <td>Kartu Identitas</td>
                <td>: {{!$ktx ? "Belum Upload" : "OK"}}</td>
            </tr>                                        
            <tr>
                <td colspan="2">
                    Foto
                    <br>
                    <br>
                    @if($ftx)
                    <img src="{{$fturl}}" style="width:200px">
                    @endif
                </td>
                
            </tr>                                        
        </table>
    </div>
    <script>
        window.print();
    </script>
</body>
</html>