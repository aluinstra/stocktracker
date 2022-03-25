<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tradingExchange = ['EAM', 'NSY', 'NDQ'];
        $tradingFee = ['2.50', '0.5', '0.5'];

        return [
            'stock_id' => $this->faker->numberBetween(0, 11),
            'trading_exchange' => $tradingExchange[$shuffle = $this->faker->shuffle([0, 1, 2])],
            'stock_amount' => $this->faker->numberBetween(0, 101),
            'total_price' => $this->faker->randomFloat(2, 1, 1000),
            'execution_date' => $this->faker->date(),
            'trading_fee' => $tradingFee[$shuffle]
        ];
    }
}
