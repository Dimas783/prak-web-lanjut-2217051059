<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $primaryKey = 'id_transaksi';

    protected $fillable = [
        'pembeli_id',
        'penjual_id',
        'jumlah_transaksi',
        'status_transaksi',
        'metode_pembayaran'
    ];

    // Relasi ke pembeli
    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class, 'pembeli_id', 'id_pembeli');
    }

    // Relasi ke penjual
    public function penjual()
    {
        return $this->belongsTo(Penjual::class, 'penjual_id', 'id_penjual');
    }
}
