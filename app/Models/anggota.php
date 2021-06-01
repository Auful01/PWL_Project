<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Anggota extends Model
{
    use HasFactory;
    protected $table = "anggotas";
    public $timestamps = false;
    protected $primaryKey = "kode";


    protected $fillable = [
        'kode',
        'nama_pelanggan',
        'no_telepon',
        'alamat',
        'pekerjaan'
    ];
}
