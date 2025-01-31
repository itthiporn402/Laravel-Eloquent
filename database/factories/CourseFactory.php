<?php
namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition()
    {
        return [
            'course_code' => strtoupper(Str::random(5)), // สร้างรหัสคอร์สที่ไม่ซ้ำ
            'course_name' => $this->faker->word,
        ];
    }
}
