<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExercisesCategoryMaster;

class TrainingController extends Controller
{
    public function index()
    {
        $categories = ExercisesCategoryMaster::all();

        return view('training.index', compact('categories'));
    }
}