<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StockResource extends JsonResource
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
            'trading_exchange' => $this->trading_exchange,
            'stock_amount' => $this->amount,
            'total_price' => $this->total_amount,
            'trading_fee' => $this->trading_fee,
            'execution_date' => $this->date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
