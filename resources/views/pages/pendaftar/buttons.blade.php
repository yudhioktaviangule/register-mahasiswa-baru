<div class="text-right">
    @if($decode->verifikasi==='aktif')
        <a href="#" onclick="callModals(`Edit Data Pendaftar`,
                                        {},
                                        `GET`,
                                        `{{route('pendaftarapi.edit',['pendaftarapi'=>$decode->id])}}`,
                                        `{{route('pendaftar.update',['pendaftar'=>$decode->id])}}`,
                                        true,'lg'
                                        )" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
        <a href="#" onclick="hapus(`{{route('pendaftar.destroy',['pendaftar'=>$decode->id])}}`)" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></a>
    @else
        <a href="{{route('pendaftar.show',['pendaftar'=>$decode->id])}}" class="btn btn-success btn-sm"><i class="fas fa-check"></i></a>
    @endif
    <a href="{{route('pendaftaran.show',['id'=>$decode->id])}}" class="btn btn-success btn-sm" target="_blank"><i class="fas fa-print"></i> </a>
</div>