<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;
class PendaftarController extends Controller{
    private $request;
    public function __construct(Request $request) {
        $this->request = $request;
        $this->middleware('auth');
    }
    public function index(){
        $request = $this->request;
        return view('pages.pendaftar.index');
    }
    public function create(){
        $request = $this->request;
    }
    public function store(){
        $request = $this->request;
    }
    public function show($id){
        $request = $this->request;
        $data = Mahasiswa::find($id);
        if($data==NULL):
            return redirect()->back();
        endif;
        $data->verifikasi = "aktif";
        $data->save();
        return redirect()->back();
    }
    public function edit($id){
        $request = $this->request;
    }
    public function update($id){
        $request = $this->request;
    }
    public function destroy($id){
        $request = $this->request;
        $data = Mahasiswa::find($id);
     
        if(!$data==NULL){
            $data->delete();
        }
        return redirect()->back();
    }
}
