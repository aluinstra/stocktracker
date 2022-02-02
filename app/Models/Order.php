<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['stock_id', 'exchange', 'amount', 'total_amount', 'date'];

    public function stock()
    {
        return $this->belongsto(Stock::class);
    }
}
