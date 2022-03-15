<?php

namespace App\Http\Resources;

use App\Enums\TradingExchange;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'stock_id' => $this->stock_id,
            'trading_exchange' => $this->trading_exchange->key,
            'stock_amount' => $this->stock_amount,
            'total_price' => $this->total_price,
            'trading_fee' => $this->trading_fee,
            'execution_date' => $this->execution_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
