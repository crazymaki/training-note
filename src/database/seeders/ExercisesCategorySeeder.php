<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ExercisesCategoryMaster;

class ExercisesCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exercises_category_master = [
            [
                'category_name' => '胸部',
                'description' => '胸部（Chest）'
            ],
            [
                'category_name' => '背中',
                'description' => '背中（Back）'
            ],
            [
                'category_name' => '腕',
                'description' => '腕（Arms）'
            ],
            [
                'category_name' => '脚',
                'description' => '脚（Legs）'
            ],
            [
                'category_name' => '肩',
                'description' => '肩（Shoulders）'
            ],
            [
                'category_name' => '腹部',
                'description' => '腹部（Abdominals）'
            ],
            [
                'category_name' => '臀部',
                'description' => '臀部（Glutes）'
            ],
            [
                'category_name' => '脊柱起立筋',
                'description' => '脊柱起立筋（Erector Spinae）'
            ],
        ];

        foreach ($exercises_category_master as $category_data) {
            ExercisesCategoryMaster::create($category_data);
        }
    }
}
