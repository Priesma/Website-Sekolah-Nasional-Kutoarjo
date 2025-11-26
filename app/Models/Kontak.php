<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;

    protected $table = 'kontak';

    protected $fillable = [
        'alamat',
        'email',
        'telepon',
        'link_yt',
        'link_ig',
        'link_fb',
        'embed_google_maps',
        'admin_id',
    ];

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

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
