<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $fillable = [
        'id', 'nama', 'jenis',
    ];

    public function account()
    {
        return $this->hasMany(Account::class, 'ID_Account');
    }
}
