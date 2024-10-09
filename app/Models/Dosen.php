<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Dosen extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dosen';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'NIP';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The data type of the primary key.
     *
     * @var string
     */
    protected $keyType = 'int';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'NIP',
        'NIDN',
        'nama_dosen',
        'no_telp',
        'email',
    ];

    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when($filters['search']??false, fn($query, $search)=>
            $query->where('nama_dosen', 'like', '%'.$search.'%')
            ->orWhere('NIP', 'like', '%' . $search . '%')
            ->orWhere('NIDN', 'like', '%' . $search . '%')
        );
    }
}
