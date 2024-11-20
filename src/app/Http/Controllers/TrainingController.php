<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExercisesCategoryMaster;

class TrainingController extends Controller
{
    public function index()
    {
        $todayExercises = [
            [
                'name' => 'ダンベルフライ',
                'category' => '胸 / ダンベル',
                'weight' => 720,
                'sets' => 4,
            ],
            [
                'name' => 'インクライン・ダンベルフライ',
                'category' => '胸 / ダンベル',
                'weight' => 480,
                'sets' => 3,
            ],
            [
                'name' => 'アイソレートデックラインプレス',
                'category' => '胸 / バーベル',
                'weight' => 1075,
                'sets' => 4,
            ],
            [
                'name' => 'ケーブル・クロスオーバー',
                'category' => '胸 / ケーブル',
                'weight' => 190,
                'sets' => 3,
            ],
        ];

        return view('training.index', compact('todayExercises'));
    }

    public function getAddExerciseModal()
    {
        $categories = ExercisesCategoryMaster::all();

        return view('components.modal.training.add-exercise-modal', compact('categories'));
    }
}
