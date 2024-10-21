<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExercisesCategoryMaster extends Model
{
    use HasFactory;


    protected $fillable = ['category_id','category_name'];

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
            ['category_id' => $apiData['id']],
            ['category_name' => $apiData['name']],
        );
    }
}
