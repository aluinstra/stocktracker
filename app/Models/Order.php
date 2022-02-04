<?php

namespace App\Models;

use App\Enums\TradingExchange;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['stock_id', 'trading_exchange', 'stock_amount', 'total_price', 'trading_fee', 'execution_date'];

    protected $casts = ['trading_exchange' => TradingExchange::class];

    public function stock()
    {
        return $this->belongsto(Stock::class);
    }
}
