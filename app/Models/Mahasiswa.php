<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
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
        "nama_akademi",
        "ibu_kandung",
        "verifikasi",
        "sekolah_asal",
        "alamat_sekolah",
        "ayah_kandung",
        "pekerjaan_ibu",
        "pekerjaan_ayah",
        "nik",
        "foto",
        "ktp",
        "kewarganegaraan",
    ];

}
