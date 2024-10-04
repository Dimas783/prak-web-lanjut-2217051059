<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;

    protected $table = 'pembeli';

    protected $primaryKey = 'id_pembeli';

    protected $fillable = [
        'nama_pembeli',
        'email_pembeli',
        'saldo_pembeli'
    ];

    // Relasi ke transaksi
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'pembeli_id', 'id_pembeli');
    }
}
