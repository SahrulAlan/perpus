<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'berita_id';
    protected $fillable = ['judul', 'penulis', 'kategori_id', 'konten', 'foto', 'tanggal_terbit', 'slug',];
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
