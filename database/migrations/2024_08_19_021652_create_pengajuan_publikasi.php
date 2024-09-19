<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengajuan_publikasi', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nim_mhs', 255);
            $table->date('tanggal_pengajuan');
            $table->string('judul_makalah_snatia');
            $table->string('sertifikat_snatia');
            $table->string('turnitin_snatia');
            $table->string('loa_snatia');
            $table->string('judul_makalah_pkl');
            $table->string('turnitin_pkl');
            $table->string('loa_pkl');
            $table->string('judul_hki_pkl');
            $table->date('tanggal_terbit_hki_pkl');
            $table->string('manual_book_hki_pkl');
            $table->string('sertifikat_hki_pkl');
            $table->string('form_pendaftaran_hki_pkl');
            $table->string('judul_tugas_akhir');
            $table->string('laporan_tugas_akhir');
            $table->string('berita_acara_ujian_ta');
            $table->string('lembar_pengesahan_ta');
            $table->string('file_program_ta');
            $table->string('judul_jurnal_ta');
            $table->string('upload_draft_jurnal_ta');
            $table->string('file_turnitin_draft_jurnal_ta');
            $table->string('loa_publikasi_makalah_ta');
            $table->string('judul_manual_book_ta');
            $table->string('upload_file_manual_book_ta');
            $table->string('upload_file_pendaftaran_hki_ta');
            $table->enum('status', ['diajukan', 'diterima', 'ditolak']);
            $table->string('komentar', 255)->nullable();
            $table->timestamps();

            $table->foreign('nim_mhs')->references('nim_mhs')->on('mahasiswa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_publikasi');
    }
};
