<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'ticker_symbol', 'ISIN'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
