<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Buku extends Model
{
    use HasFactory;
    protected $table = "buku";
    public $timestamps = false;
    protected $primaryKey = "kode";


    protected $fillable = [
        'kode',
        'nama_barang',
        'kategori',
        'GAMBAR',
        'jumlah',
        'harga_Barang',
        'harga_sewa'
    ];
}
