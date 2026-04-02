<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pustakawan extends Model
{
    protected $table = 'pustakawans';
    protected $primaryKey = 'pustakawan_id';
    protected $fillable = ['nama', 'jabatan', 'foto', 'deskripsi'];
}
