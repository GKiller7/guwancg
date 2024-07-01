<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    public function run()
    {
        $locations = [
            'Anew',
            'Mir-1',
            'Mir-2',
        ];

        foreach ($locations as $location) {
            Location::create([
                'name' => $location,
            ]);
        }
    }
}
