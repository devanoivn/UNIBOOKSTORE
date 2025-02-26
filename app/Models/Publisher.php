<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $fillable = ['idpenerbit','nama', 'alamat', 'kota', 'telepon'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
