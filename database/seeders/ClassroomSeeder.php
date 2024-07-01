<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Location;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    public function run()
    {
        $classrooms = [
            ['name' => 'A1'],
            ['name' => 'B2'],
            ['name' => 'C3'],
            ['name' => 'D5'],
            ['name' => 'D4'],
            ['name' => 'A5'],
            ['name' => 'A7'],
            ['name' => 'B6'],
            ['name' => 'B8'],
            ['name' => 'A4'],
        ];

        foreach ($classrooms as $classroomData) {
            Classroom::create([
                'name' => $classroomData['name'],
                'location_id' => Location::inRandomOrder()->first()->id,
            ]);
        }
    }
}
