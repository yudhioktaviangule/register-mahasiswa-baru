<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string("nomor_daftar",30)->unique();
            $table->enum("verifikasi",['nonaktif','aktif']);
            $table->enum("agama",['islam','kristen','katolik','hindu','buddha']);
            $table->enum("kelamin",['L','P']);
            $table->string("name");
            $table->string("nik");
            $table->string("ibu_kandung");
            $table->string("ayah_kandung");
            $table->string("pekerjaan_ibu");
            $table->string("pekerjaan_ayah");
            $table->string("nama_akademi");
            $table->enum("kewarganegaraan",['wni','wna']);
            $table->string("tinggi");
            $table->string("berat");
            $table->string("tempat_lahir");
            $table->date("tanggal_lahir");
            $table->longtext("alamat");
            $table->string("telepon",20);
            $table->string("kode_pos",5);
            
            $table->longtext("ktp");
            $table->longtext("foto");
            $table->integer("user_id")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
}
