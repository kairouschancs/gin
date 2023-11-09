<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Weather_InformationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('weather_informations')->insert([	
            'id' => '11',
            'aria_name' => '新潟',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('weather_informations')->insert([	
            'id' => '12',
            'aria_name' => '上越（高田）',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('weather_informations')->insert([	
            'id' => '13',
            'aria_name' => '佐渡（相川）',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('weather_informations')->insert([	
            'id' => '14',
            'aria_name' => '新発田（村上）',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
    }
}
