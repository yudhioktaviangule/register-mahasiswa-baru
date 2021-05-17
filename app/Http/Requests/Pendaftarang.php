<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Pendaftarang extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "email"           => "required|unique:mahasiswas",
            "nomor_daftar"    => "required|unique:mahasiswas",
            "agama"           => "required",
            "nama_akademi"    => "required",
            "kelamin"         => "required",
            "kewarganegaraan" => "required",
            "tinggi"          => "required",
            "berat"           => "required",
            "tempat_lahir"    => "required",
            "tanggal_lahir"   => "required",
            "sekolah_asal"    => "required",
            "alamat_sekolah"  => "required",
            "alamat"          => "required",
            "telepon"         => "required",
            "kode_pos"        => "required",
            "ibu_kandung"     => "required",
            "telepon_ibu"     => "required",
            "ayah_kandung"    => "required",
            "telepon_ayah"    => "required",
            "pekerjaan_ibu"   => "required",
            "pekerjaan_ayah"  => "required",
        ];
    }
}
