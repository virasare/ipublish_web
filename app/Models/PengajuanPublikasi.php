<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PengajuanPublikasi extends Model
{

    use HasFactory;

    protected $table = 'pengajuan_publikasi';
    protected $primaryKey = 'id';
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'nim_mhs',
        'tanggal_pengajuan',
        'judul_makalah_snatia',
        'sertifikat_snatia',
        'turnitin_snatia',
        'loa_snatia',
        'judul_makalah_pkl',
        'turnitin_pkl',
        'loa_pkl',
        'judul_hki_pkl',
        'tanggal_terbit_hki_pkl',
        'manual_book_hki_pkl',
        'sertifikat_hki_pkl',
        'form_pendaftaran_hki_pkl',
        'judul_tugas_akhir',
        'laporan_tugas_akhir',
        'berita_acara_ujian_ta',
        'lembar_pengesahan_ta',
        'file_program_ta',
        'judul_jurnal_ta',
        'upload_draft_jurnal_ta',
        'file_turnitin_draft_jurnal_ta',
        'loa_publikasi_makalah_ta',
        'judul_manual_book_ta',
        'upload_file_manual_book_ta',
        'upload_file_pendaftaran_hki_ta',
        'status',
        'komentar',
    ];
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim_mhs', 'nim_mhs');
    }
}
