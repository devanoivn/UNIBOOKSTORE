<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable = ['idbuku', 'kategori', 'judul', 'harga', 'stok', 'penerbit_id'];

    public function publisher()
    {
        return $this->belongsTo(Publisher::class, 'penerbit_id', 'id');
    }
}

