<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $units = ['قطعة','حبة','كرتونة','درزن','لفة','متر','علبة'];
        foreach ($units as $unit) {
            Unit::create([
                'name' => $unit,
            ]);
        }


    }
}