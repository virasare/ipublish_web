<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PengajuanHki extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_hki', function (Blueprint $table) {
            $table->string('HKI_id')->primary();
            $table->string('nim_mhs', 255);
            $table->date('submission_date');
            $table->enum('status', ['diajukan', 'diterima', 'ditolak']);
            $table->string('manual_book', 255)->nullable();
            $table->string('fomulir_dokumen', 255)->nullable();
            $table->string('sertifikat_hki', 255)->nullable();
            $table->string('komentar', 255)->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('nim_mhs')->references('nim_mhs')->on('mahasiswa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan_hki');
    }
}
