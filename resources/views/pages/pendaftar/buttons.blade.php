<div class="text-right">
    @if($decode->verifikasi==='aktif')
        <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></a>
    @else
        <a href="{{route('pendaftar.show',['pendaftar'=>$decode->id])}}" class="btn btn-success btn-sm"><i class="fas fa-check"></i></a>
    @endif
    <a href="{{url('pendaftaran.show',['id'=>$decode->id])}}" class="btn btn-success btn-sm"><i class="fas fa-print"></i> Cetak</a>
</div>