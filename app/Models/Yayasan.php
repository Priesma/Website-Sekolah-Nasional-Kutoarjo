<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yayasan extends Model
{
    use HasFactory;
    protected $table = 'yayasan';
    protected $fillable = ['nama', 'deskripsi', 'gambar', 'admin_id'];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'admin_id',
        'created_at',
        'updated_at',
    ];

    public function admin() { return $this->belongsTo(Admin::class); }
}
