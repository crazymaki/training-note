<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("trainings", function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained()->onDelete("cascade"); // ユーザーに紐づけ
            $table->string("name"); // トレーニング名
            $table->string("type")->nullable(); // トレーニングの種類 (例: 有酸素運動、無酸素運動)
            $table->timestamp("start_time")->nullable(); // トレーニングの開始時間
            $table->timestamp("end_time")->nullable(); // トレーニングの終了時間
            $table->float("calories_burned")->nullable(); // 消費カロリー
            $table->float("heart_rate")->nullable(); // 心拍数
            $table->text("notes")->nullable(); // メモ
            $table->timestamps(); // 作成・更新日時
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("trainings");
    }
}
