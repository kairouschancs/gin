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
        if (!Schema::hasTable('working_hours')) {
        Schema::create('working_hours', function (Blueprint $table) {
            $table->comment('理論労働時間算出係数');
            $table->integer('id')->primary()->comment('ID -> 自動割り当て');
            $table->string('shop_type_symbol')->comment('MD/HU/KC/OT/OF');
            $table->double('opening_work', 3, 2)->nullable()->comment('オープン準備');
            $table->double('Preparation', 3, 2)->nullable()->comment('仕込み');
            $table->double('payment', 3, 2)->nullable()->comment('納金');
            $table->double('order_work', 3, 2)->nullable()->comment('発注');
            $table->double('4S_Pre_closing', 3, 2)->nullable()->comment('4S・プレクロ');
            $table->double('closing_work', 3, 2)->nullable()->comment('閉店作業');
            $table->double('manager_work', 3, 2)->nullable()->comment('店長ワーク');
            $table->double('training', 3, 2)->nullable()->comment('トレーニング');
            $table->double('appointment', 3, 2)->nullable()->comment('Mt');
            $table->double('seven_million_over', 3, 2)->nullable()->comment('700万円以上');
            $table->double('ten_million_over', 3, 2)->nullable()->comment('1,000万円以上');
            $table->integer('Person_hour_sales')->nullable()->comment('人時売上係数');
            $table->integer('Minimum_sales_staff')->nullable()->comment('最低営業人員');
            $table->dateTime('created_at')->comment('作成日');
            $table->dateTime('updated_at')->comment('更新日');
        });
    }}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('working_hours');
    }
};
