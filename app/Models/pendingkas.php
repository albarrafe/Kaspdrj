<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendingkas extends Model
{
    use HasFactory;
    public $table = "pendingkas";
    protected $fillable = ['nama', 'tanggal', 'jumlah', 'bukti'];
}
