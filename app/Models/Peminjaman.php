<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';
    public $timestamps = false;
    protected $primaryKey = 'kode_pinjam';

    protected $fillable = [
        'kode_pinjam',
        'id_kamera',
        'id_user',
        'tanggal_pinjam',
        'tanggal_kembali'
    ];
}
