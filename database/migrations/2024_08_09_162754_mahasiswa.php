<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('nim_mhs', 255)->primary();
            $table->string('nama_mhs', 255);
            $table->string('email');
            $table->string('kelompok', 30);
            $table->string('dosen_pa', 255)->nullable();
            $table->string('dosen_p1', 255)->nullable();
            $table->string('dosen_p2', 255)->nullable();

            $table->foreign('email')->references('email')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}
