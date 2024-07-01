<?php

namespace Database\Seeders;

use App\Models\Lesson;
use App\Models\Registration;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {


        $this->call([
            LocationSeeder::class,
            ClassroomSeeder::class,
            BranchSeeder::class,
        ]);

        Teacher::factory()->count(10)->create();
        Student::factory()->count(50)->create();
        Lesson::factory()->count(50)->create();
        Registration::factory()->count(100)->create();
    }

}
