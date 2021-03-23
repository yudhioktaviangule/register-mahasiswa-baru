<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;
use Yajra\DataTables\DataTables AS Yudhi;
class PendaftarApi extends Controller{
    private $request;
    public function __construct(Request $request) {
        $this->request = $request;
       $this->middleware('auth_aip');
    }
    public function index(){
        $request = $this->request;
    }
    public function create(){
        $request = $this->request;
    }
    public function store(){
        $request = $this->request;
        $data = Mahasiswa::get();
        $table = Yudhi::of($data)->addIndexColumn()
                        ->addColumn("aksi",function($row){
                            $decode = json_decode($row);
                            
                            return View::make('pages.pendaftar.buttons',compact("decode"));
                        });

        return $table->make();
        
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