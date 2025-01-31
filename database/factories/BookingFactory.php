<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{
    return [
        'customer_id' => Customer::factory(),
        'room_id' => Room::factory(),
        'booking_date' => $this->faker->date(),
        'check_in_date' => $this->faker->date(),
        'check_out_date' => $this->faker->date(),
    ];
}

}
