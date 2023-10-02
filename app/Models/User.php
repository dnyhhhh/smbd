<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $table = 'tb_user';
    protected $primaryKey = 'nim'; // Sesuaikan dengan primary key yang digunakan pada tabel
    protected $fillable = ['name', 'nim', 'password']; // Sesuaikan dengan kolom yang ada di tabel
}
