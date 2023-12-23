<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'Kategori Transaksi', 'Tujuan Transaksi', 'Nominal Transaksi', 'ID_Account'
    ];
    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'transaksi');
    }
}
