<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('Shop_types', function (Blueprint $table) {
            $table->integer('working_hour_id')->after('shop_work_content')->comment('Shop_types_table -> Relation');
            $table->foreign('working_hour_id')->references('id')->on('Shop_types')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Shop_types', function (Blueprint $table) {
            $table->dropForeign('Shop_types_working_hour_id_foreign');
        });
    }
};
