<?php

namespace Database\Factories;

use App\Models\Branch;
use App\Models\Classroom;
use App\Models\Lesson;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    protected $model = Lesson::class;

    public function definition()
    {
        return [
            'classroom_id' => Classroom::factory(),
            'branch_id' => Branch::factory(),
            'teacher_id' => Teacher::factory()->nullable(),
        ];
    }
}
