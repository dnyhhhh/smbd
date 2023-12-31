<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel extends Model
{
    use HasFactory;
    protected $table = 'pengamatan';
    protected $primaryKey = 'id_tomat';


    protected $fillable = [
        'id_tomat',
        'berat',
        'gas',
        'suhu',
    ];
}
