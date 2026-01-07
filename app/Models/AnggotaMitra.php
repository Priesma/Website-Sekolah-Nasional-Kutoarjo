<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnggotaMitra extends Model
{
    protected $fillable = [
        'mitra_id',
        'nama',
        'jabatan',
        'foto',
    ];

    public function mitra()
    {
        return $this->belongsTo(Mitra::class);
    }
}
