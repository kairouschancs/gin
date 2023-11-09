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
        if (!Schema::hasTable('shop_halls')) {
        Schema::create('shop_halls', function (Blueprint $table) {
            $table->comment('建物登録');
            $table->integer('id')->primary()->comment('ID -> 1->佐渡佐和田/2->AM新潟南…91->本社');
            $table->string('develop_postal_code')->comment('952-1307');
            $table->string('develop_address')->comment('新潟県新潟市江南区下早通柳田1-1-1');
            $table->string('develop_building')->comment('イオンモール新潟南');
            $table->string('develop_symbol')->comment('AM新潟南');
            $table->string('develop_name')->comment('新潟南');
            //$table->integer('weather_information_id')->unsigned()->comment('11：新潟/12：上越(高田)/13：佐渡(相川)/14：新発田(村上)');
            $table->dateTime('created_at')->comment('作成日');
            $table->dateTime('updated_at')->comment('更新日');
        });
    }}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_halls');
    }
};
