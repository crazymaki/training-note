<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfileFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("users", function (Blueprint $table) {
            $table->integer("gender")->nullable()->after("email"); // 性別: 男性、女性、その他を想定
            $table->date("date_of_birth")->nullable()->after("gender"); // 生年月日
            $table->float("height")->nullable()->after("date_of_birth"); // 身長: メートルまたはセンチメートル
            $table->float("weight")->nullable()->after("height"); // 体重: キログラム
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("users", function (Blueprint $table) {
            $table->dropColumn(["gender", "date_of_birth", "height", "weight"]);
        });
    }
}
