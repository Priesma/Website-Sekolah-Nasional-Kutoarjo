<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Misi extends Model
{
    use HasFactory;
    protected $table = 'misi';
    protected $fillable = ['isi', 'admin_id'];
    public function admin() { return $this->belongsTo(Admin::class); }
}
