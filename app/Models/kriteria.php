<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kriteria extends Model
{
    use HasFactory;
    protected $fillable = ['kode', 'nama', 'tipe'];
    public function alternatif()
    {
        return $this->hasMany(alternatif::class, 'kriteria_id', 'id');
    }
}
