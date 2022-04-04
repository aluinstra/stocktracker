<?php

namespace App\Http\Resources;

use App\Enums\TradingExchange;


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
            'name' => $this->name,
            'trading_exchange' => $this->orders->count() > 0 ? TradingExchange::fromValue(
                $this->orders->first()->trading_exchange
            )->key : "",
            'ticker_symbol' => $this->ticker_symbol,
            'ISIN' => $this->ISIN,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
