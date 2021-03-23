<div class='form-group'>
    <label for='name'>Akademi</label>
    <input required readonly type='type' class='form-control' value="{{$mhs->nama_akademi}}">
</div>
<div class='form-group'>
    <label for='name'>Nomor Pendaftaran</label>
    <input required readonly type='type' class='form-control' value="{{$mhs->nomor_daftar}}">
</div>
<div class='form-group'>
    <label for='name'>Tanggal Pendaftaran</label>
    <input required readonly type='type' class='form-control' value="{{\Carbon\Carbon::parse($mhs->created_at)->format('d-m-Y')}}">
</div>