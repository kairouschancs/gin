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
        if (!Schema::hasTable('shop_types')) {
        Schema::create('shop_types', function (Blueprint $table) {
            $table->comment('業態登録');
            $table->integer('id')->primary()->comment('ID ->1->MD / 2->HU / 3->KC / 4->OT / 91->本社');
            $table->string('shop_type_name')->comment('ミスタードーナツ/はなまるうどん/コメダ珈琲/大戸屋/本社');
            $table->text('shop_work_content')->comment('労働契約書記載の業務内容');
            //$table->foreignId('working_hour_id')->constrained()->onDelete('cascade')->comment('理論労働時間係数ID');
            $table->dateTime('created_at')->comment('作成日');
            $table->dateTime('updated_at')->comment('更新日');
        });
    }}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_types');
    }
};
