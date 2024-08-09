<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pengembalian extends Model 
{
    protected $table = 'pengembalians';
    protected $primaryKey = 'id';

    public function peminjamans(): HasOne
    {
        return $this->hasOne(Peminjaman::class, 'id','peminjamans_id');
    }
}
