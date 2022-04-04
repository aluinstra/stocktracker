<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Stock;
use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stocks = Stock::factory(10)->create();

        foreach ($stocks as $stock) {
            Order::factory()
                ->for(Stock::factory())
                ->count(rand(1, 5))
                ->create(['stock_id' => $stock->id]);
        }
    }
}
