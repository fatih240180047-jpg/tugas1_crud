<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    // Memberitahu Laravel kalau nama tabelnya adalah 'buku'
    protected $table = 'buku'; 

    // Daftar kolom yang boleh diisi (mass assignment)
    protected $fillable = ['judul', 'penulis', 'tahun'];
}