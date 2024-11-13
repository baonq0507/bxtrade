<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Interval;
class IntervalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $intervals = [
            '1',
            '5',
            '15',
            '30',
            '60',
            'D',
            '2D',
            '3D',
            'M',
            'W',
            '3W',
            '6M'
        ];
        foreach ($intervals as $interval) {
            Interval::create([
                'interval' => $interval,
            ]);
        }
    }
}
