<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yayasan extends Model
{
    use HasFactory;
    protected $table = 'yayasan';
    protected $fillable = ['nama', 'deskripsi', 'gambar', 'admin_id'];
    public function admin() { return $this->belongsTo(Admin::class); }
}
