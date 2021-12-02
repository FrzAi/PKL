<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slip extends Model
{
    use HasFactory;
    protected $table = 'tb_slip';
    protected $fillable = ['nama', 'keterangan', 'nama_barang', 'qty', 'biaya', 'tanggal', 'total_biaya'];
}
