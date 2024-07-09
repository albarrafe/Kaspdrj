<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bayarkas extends Model
{
    use HasFactory;
    public $table = "bayarkas";
    protected $fillable = ['nama', 'tanggal', 'jumlah', 'bukti'];
}
