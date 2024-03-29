<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $primaryKey = 'id';

    public function cuti()
    {
        return $this->hasMany(Cuti::class, 'nomor_induk', 'nomor_induk');
    }
}
