<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Dosen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->string('NIP', 255)->primary();
            $table->string('NIDN', 255)->nullable();
            $table->string('nama_dosen', 255);
            $table->string('no_telp')->nullable();
            $table->string('email')->nullable();
            $table->timestamps(); // Menambahkan created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosen'); // Cukup hapus tabel dosen, timestamps otomatis terhapus
    }
}
