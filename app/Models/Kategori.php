<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'kategori_id';
    protected $fillable = ['nama_kategori'];

    public function berita()
    {
        return $this->hasMany(Berita::class, 'kategori_id', 'kategori_id');
    }
}
