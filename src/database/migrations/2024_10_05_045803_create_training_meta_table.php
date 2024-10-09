<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("training_meta", function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained()->onDelete("cascade"); // ユーザーIDの外部キー
            $table->string("exercise_habits")->nullable(); // 運動習慣: 例 "週3回のトレーニング"
            $table->string("preferred_exercise_types")->nullable(); // 好みの運動: 例 "ランニング、ウエイトリフティング"
            $table->string("training_schedule")->nullable(); // トレーニングスケジュール: 例 "月・水・金"
            $table->string("goal")->nullable(); // トレーニング目標: 例 "筋力アップ"
            $table->text("additional_info")->nullable(); // その他のメタ情報（自由記述欄）
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
        Schema::dropIfExists("training_meta");
    }
}
