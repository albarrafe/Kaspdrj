<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kasagustus extends Model
{
    use HasFactory;
    public $table = "kasagustus";
    protected $fillable = ['nama', 'tanggal', 'jumlah', 'bukti'];
}
