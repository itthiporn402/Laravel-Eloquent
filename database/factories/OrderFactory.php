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
        return [
            'customer_id' => \App\Models\Customer::factory(),  // สมมุติว่ามี CustomerFactory
            'total_price' => $this->faker->randomFloat(2, 10, 100),  // ราคา
            'status' => $this->faker->randomElement(['pending', 'completed', 'cancelled']),
        ];
    }
}
