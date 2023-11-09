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
        Schema::table('Shop_halls', function (Blueprint $table) {
            $table->integer('weather_information_id')->after('develop_name')->comment('Shop_halls_table -> Relation');
            $table->foreign('weather_information_id')->nullable()->references('id')->on('weather_informations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Shop_halls', function (Blueprint $table) {
            $table->dropForeign('Shop_halls_weather_information_id_foreign');
        });
    }
};
