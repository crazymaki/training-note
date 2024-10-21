<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExercisesMaster extends Model
{
    use HasFactory;

    protected $fillable = ['id','category_id','exercise_name'];

    /**
     * APIで取得データを保存
     *
     * @param array $apiData
     * @return void
     */
    public static function saveFromApi($apiData)
    {
        // データベースに保存
        return self::updateOrCreate(
            ['id' => $apiData['id']],
            [
                'category_id' => $apiData['category'],
                'exercise_name' => $apiData['name'],
            ]
        );
    }
}
