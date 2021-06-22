<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lensa extends Model
{
    use HasFactory;
    protected $table = "lensa";
    public $timestamps = false;
    protected $primaryKey = "kode";


    protected $fillable = [
        'kode',
        'id_merek',
        'tipe',
        'gambar',
        'harga_sewa'
    ];


    public function merek()
    {
        return $this->belongsTo(Merek::class, 'id_merek');
    }

    // public function pinjam(){
    //     return $this->hasMany(Peminjaman::class, 'kode_pinjam')
    // }
}
