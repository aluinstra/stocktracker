<?php

namespace Database\Factories;

use App\Models\Stock;
use Illuminate\Database\Eloquent\Factories\Factory;

class StockFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Stock::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name' => $this->faker->company(),
            'ticker_symbol' => $this->faker->lexify('????'),
            'ISIN' => $this->faker->randomNumber(8, true) . $this->faker->randomNumber(4, true)
        ];
    }
}
