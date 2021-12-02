<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kwitasi extends Model
{
    use HasFactory;
    protected $table = 'tb_kwitansi';
    protected $fillable = ['id_slip', 'nama', 'pekerjaan', 'alamat', 'keterangan', 'biaya', 'tanggal'];
}
