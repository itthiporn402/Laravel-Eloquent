<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    protected $model = Teacher::class;

    public function definition()
    {
        return [
            'teacher_code' => $this->faker->unique()->numberBetween(1000, 9999),
            'name' => $this->faker->name,
        ];
    }
}
