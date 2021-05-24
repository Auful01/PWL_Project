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
    protected $primaryKey = "id_buku";


    protected $fillable = [
        'id_buku',
        'judul',
        'penulis',
        'gambar',
        'cetakan',
        'penerbit',
        'keterangan'
    ];
}
