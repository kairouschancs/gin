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
        if (!Schema::hasTable('roles')) {
        Schema::create('roles', function (Blueprint $table) {
            $table->comment('ユーザー権限');
            $table->integer('id')->primary()->comment('');
            $table->string('class')->comment('Guest/Employee/Staff/Shop');
            $table->string('role')->comment('Staff/SS/Aｓｔ/St/Mgr/Smgr/Srmgr/Gmgr/Admin');
            $table->string('role_summary')->comment('スタッフ/社員/副店長/店長/マネージャー/シニアマネージャー;/ゼネラルマネージャー/店舗/店舗(営業日報/水光熱あり);91->Admin');
            $table->dateTime('created_at')->comment('作成日');
            $table->dateTime('updated_at')->comment('更新日');
        });
    }}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};