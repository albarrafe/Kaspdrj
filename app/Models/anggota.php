<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    use HasFactory;
    public $table = "anggota";
    protected $fillable = ['nama', 'no_telp', 'jabatan'];
}
