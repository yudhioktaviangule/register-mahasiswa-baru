<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    /* $table->string("nomor_daftar",30)->unique();
    $table->string("name");
    $table->enum("kelamin",['L','P']);
    $table->string("tinggi");
    $table->string("berat");
    $table->string("tempat_lahir");
    $table->date("tanggal_lahir");
    $table->longtext("alamat");
    $table->string("telepon",20);
    $table->string("kode_pos",5);
    $table->longtext("ijazah");
    $table->longtext("danum");
    $table->longtext("foto");
    $table->integer("user_id")->default(0); */
    protected $fillable = [
        'nomor_daftar',
        'name',
        'kelamin',
        'tinggi',
        'berat',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'telepon',
        'kode_pos',
        'kode_pos',
        "nama_akademi",
        "kewarganegaraan",
    ];

}
