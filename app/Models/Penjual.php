<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjual extends Model
{
    use HasFactory;

    protected $table = 'penjual';

    protected $primaryKey = 'id_penjual';

    protected $fillable = [
        'nama_penjual',
        'service_type'
    ];

    // Relasi ke transaksi
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'penjual_id', 'id_penjual');
    }
}
