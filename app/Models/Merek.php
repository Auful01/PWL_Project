<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
    use HasFactory;
    protected $table = 'merek';
    public $timestamps = false;
    protected $primaryKey = 'id_merek';

    protected $fillable = [
        'id_merek',
        'merek'
    ];

    public function kamera()
    {
        return $this->hasMany(Kamera::class);
    }
}
