<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumpulan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',  // Menambahkan user_id ke dalam fillable
        'nama_tugas',
        'tanggal_deadline',
        'status',
    ];
}
