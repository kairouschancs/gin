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
        if (!Schema::hasTable('users')) {
        Schema::create('users', function (Blueprint $table) {
            $table->comment('利用者登録');
            $table->id()->comment('ID -> 自動割り当て');
            $table->integer('employee_id')->comment('従業員ID');
            $table->string('employee_code', 50)->comment('従業員コード');
            $table->string('name', 50)->comment('従業員名');
            $table->string('email', 150)->comment('E-mail');
            $table->string('password', 100)->comment('Password');
            $table->string('holiday_calendar_type')->default(0)->comment('休日カレンダーType');
            $table->integer('retirement')->default(0)->comment('退職：在籍->0 // 退職->1');
            $table->timestamp('email_verified_at')->nullable()->comment('入力E-mailAddressの確認メール受信日');
            $table->rememberToken()->comment('パスワードリセット用');
            $table->dateTime('created_at')->comment('作成日');
            $table->dateTime('updated_at')->comment('更新日');
        });
    }}
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};