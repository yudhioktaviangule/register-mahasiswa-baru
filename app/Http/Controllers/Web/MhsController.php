<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;
use App\Models\Mahasiswa;
use App\ServiceTambahan\Upload;
use Carbon\Carbon;
class MhsController extends Controller{
    private $request;
    public function __construct(Request $request) {
        $this->request = $request;
    }
    public function index(){
        $request = $this->request;
    }
    public function create(){
        $request = $this->request;
        return view("pages.register");
    }

    private function generateNomor($pembentuk="")
    {
        $y = date("Y");
        $pembentuk=$pembentuk=="" ? date("Ym") : $pembentuk;
        $cek = Mahasiswa::whereRaw("YEAR(created_at)",$y)->count();
        $v = true;
        $icount = intval($cek)+1;
        while($v){
            $spfcode = sprintf("%05d",$icount); 
            $kode = "{$pembentuk}$spfcode";
            $cek = Mahasiswa::where("nomor_daftar",$kode)->first();
            if($cek==NULL):
                $v=false;
            else:
                $icount-=1;
            endif;
        }
        return $kode;
    }

    public function store(){
        $request = $this->request;
        $post = $request->input();
        unset($post['_token']);
        $post['foto'] = '-';
        $post['ktp'] = '-';
        $post['verifikasi'] = 'nonaktif';
        $post['nomor_daftar'] = $this->generateNomor();
        $mhs = new Mahasiswa();
        $mhs->fill($post);
        $mhs->save();
        $mhs = Mahasiswa::find($mhs->id);
        $foto = $request->file('foto');
        $ktp = $request->file('ktp');
        $ft = "pht-{$mhs->id}.".$foto->getClientOriginalExtension();
        $kt = "ktp-{$mhs->id}.".$ktp->getClientOriginalExtension();
        $mhs->foto = $ft;
        $mhs->ktp = $kt;
        $mhs->save();
        $foto->move(public_path("mhs/foto"),"$ft");
        $ktp->move(public_path("mhs/ktp"),"$kt");
        return view("pages.complete_register",compact("mhs"));
    }
    public function show($id){
        $request = $this->request;
    }
    public function edit($id){
        $request = $this->request;
    }
    public function update($id){
        $request = $this->request;
    }
    public function destroy($id){
        $request = $this->request;
    }
}