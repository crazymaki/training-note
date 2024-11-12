<?php

namespace App\Http\Controllers;

use App\Models\ExercisesMaster;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getTrainingMenu(Request $request)
    {
        $categoryId = $request->query('category_id');

        if (!$categoryId) {
            return response()->json(['error' => 'カテゴリーIDが指定されていません'], 400);
        }

        $exercises = ExercisesMaster::where('category_id', $categoryId)->get();

        if ($exercises->isEmpty()) {
            return response()->json(['message' => '指定されたカテゴリーの運動が見つかりません'], 404);
        }

        return response()->json($exercises);
    }
}