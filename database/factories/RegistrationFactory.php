<?php

namespace Database\Factories;

use App\Models\Lesson;
use App\Models\Registration;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registration>
 */
class RegistrationFactory extends Factory
{
    protected $model = Registration::class;

    public function definition()
    {
        return [
            'lesson_id' => Lesson::factory(),
            'student_id' => Student::factory(),
            'price' => $this->faker->randomFloat(2, 100, 1000),
            'created_at' => now(),
            'update_at' => now(),
        ];
    }
}
