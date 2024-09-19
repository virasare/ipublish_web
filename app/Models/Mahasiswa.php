<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim_mhs';
    public $incrementing = false;
    public $timestamps = false;
    
    protected $fillable = [
        'nim_mhs',
        'nama_mhs',
        'email',
        'kelompok',
        'dosen_pa',
        'dosen_p1',
        'dosen_p2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'email', 'email');
    }
}
