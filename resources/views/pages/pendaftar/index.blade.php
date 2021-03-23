@extends('templates.index')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Registrasi Pendaftar</h3>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <table class="table" id="pendaftar-table">
                        <thead>
                            <tr>
                                <th>No. Register</th>
                                <th>Nama</th>
                                <th>Telepon</th>
                                <th>E-Mail</th>
                                <th>Sekolah Asal</th>
                                <th>Alamat Sekolah Asal</th>
                                <th><i class="fas fa-cog"></i></th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer"></div>
        </div>
    </div>
@endsection
@section("js")
    <script>
        $(document).ready(()=>{
            var _token = `Bearer {{Auth::user()->remember_token}}`;
            //console.log(_token);
            $('#pendaftar-table').DataTable({
                serverSide:true,
                processing:true,
                columns:[
                    {data:"nomor_daftar",name:"nomor_daftar"},
                    {data:"name",name:"name"},
                    {data:"telepon",name:"telepon"},
                    {data:"email",name:"email"},
                    {data:"sekolah_asal",name:"sekolah_asal"},
                    {data:"alamat_sekolah",name:"alamat_sekolah"},
                    {data:"aksi",name:"aksi"},
                ],
                ajax:{
                    url:`{{route('pendaftarapi.store')}}`,
                    type:"POST",
                    data:{
                        _token:`{{csrf_token()}}`
                    },
                    beforeSend:(xhr)=>{
                        xhr.setRequestHeader("Auth",_token);
                    }
                }   
            })
        });
    </script>
@endsection
