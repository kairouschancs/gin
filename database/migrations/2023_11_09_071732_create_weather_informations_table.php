<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('weather_informations')) {
        Schema::create('weather_informations', function (Blueprint $table) {
            $table->comment('気象情報起点登録');
            $table->integer('id')->primary()->comment('ID -> 11：新潟/12：上越(高田)/13：佐渡(相川)/14：新発田(村上)');
            $table->string('aria_name')->comment('11：新潟/12：上越(高田)/13：佐渡(相川)/14：新発田(村上)');
            $table->dateTime('created_at')->comment('作成日');
            $table->dateTime('updated_at')->comment('更新日');
        });
    }}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weather_informations');
    }
};
