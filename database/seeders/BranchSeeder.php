<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    public function run()
    {
        $branchs = [
            'Beginner',
            'Elementary',
            'Upper-Intermediate',
            'Advanced',
            'Comp-9',
            'Comp-10',
            'Comp-11',
            'Math-1',
            'Math-2',
        ];

        foreach ($branchs as $branch) {
            Branch::create([
                'name' => $branch,
            ]);
        }
    }
}
