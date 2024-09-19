<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PengajuanHKI extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_hki';
    protected $primaryKey = 'HKI_id';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = true;

    protected $fillable = [
        'nim_mhs',
        'submission_date',
        'status',
        'manual_book',
        'fomulir_dokumen',
        'sertifikat_hki',
        'komentar',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Str::uuid();
            }
        });
    }

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim_mhs', 'nim_mhs');
    }
}
