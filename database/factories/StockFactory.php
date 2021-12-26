<?php

namespace Database\Factories;

use App\Models\Kitchen;
use App\Models\Stock;
use App\Models\Address;
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
            'current_stock' => 0,
            'kitchen_item_id' => Kitchen::inRandomOrder()->first()->id,
            'restaurant_id' => Address::inRandomOrder()->first()->id,
        ];
    }
}
