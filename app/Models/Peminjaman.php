<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Peminjaman extends Model
{
    protected $table = 'peminjamans';
    protected $primaryKey = 'id';

    public function anggotas(): HasOne
    {
        return $this->hasOne(Anggota::class, 'id','anggotas_id');
    }
    
    public function bukus(): HasOne
    {
        return $this->hasOne(Buku::class, 'id','bukus_id');
    }
}
