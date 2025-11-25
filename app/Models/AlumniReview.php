<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumniReview extends Model
{
    use HasFactory;

    protected $table = 'alumni_review';

    protected $fillable = [
        'nama_alumni',
        'tahun_lulus',
        'kesan',
        'pekerjaan',
        'foto',
        'admin_id',
    ];

    protected $casts = [
        'tahun_lulus' => 'integer',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
