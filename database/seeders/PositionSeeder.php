<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    public function run(): void
    {
        $positions = [
            'Member',
            'Timothy',
            'Leader',
            'Apprentice',
            'Pastor',
            'Admin',
        ];

        foreach ($positions as $position) {
            Position::firstOrCreate([
                'name' => $position
            ]);
        }
    }
}