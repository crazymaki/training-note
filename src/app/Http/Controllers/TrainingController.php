<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TrainingRequest;
use App\Models\ExercisesCategoryMaster;
use App\Models\Workout;
use App\Models\Exercise;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

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

    public function add(TrainingRequest $request)
    {
        // データの保存処理
        $workout = new Workout();
        $workout->date = $request->input('date');
        $workout->user_id = Auth::id();
        $workout->save();

        $exercise = new Exercise();
        $exercise->weight = $request->input('weight');
        $exercise->sets = $request->input('sets');
        // TODO 現在対応できていない
        $exercise->reps = 0;
        $exercise->exercises_id = $request->input('exercises');
        $exercise->workout_id = $workout->id;
        $exercise->save();

        return response()->json(['success' => true]);
    }
}
