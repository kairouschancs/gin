<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Shop_HallsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shop_halls')->insert([	
            'id' => '1',
            'develop_postal_code' => '952-1302',
            'develop_address' => '新潟県佐渡市市野沢27番地',
            'develop_building' => '',
            'develop_symbol' => '佐渡佐和田',
            'develop_name' => '佐渡佐和田',
            'weather_information_id' => '13',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('shop_halls')->insert([	
            'id' => '2',
            'develop_postal_code' => '950-0150',
            'develop_address' => '新潟県新潟市江南区早通柳田1丁目1番1号',
            'develop_building' => 'イオンモール新潟南ショッピングセンター',
            'develop_symbol' => 'AM新潟南',
            'develop_name' => '新潟南',
            'weather_information_id' => '11',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('shop_halls')->insert([	
            'id' => '3',
            'develop_postal_code' => '943-0173',
            'develop_address' => '新潟県上越市富岡3458番地',
            'develop_building' => 'イオン上越ショッピングセンター',
            'develop_symbol' => 'AE上越',
            'develop_name' => '上越',
            'weather_information_id' => '12',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('shop_halls')->insert([	
            'id' => '4',
            'develop_postal_code' => '950-2002',
            'develop_address' => '新潟県新潟市西区青山2-5-1',
            'develop_building' => 'イオン新潟青山ショッピングセンター',
            'develop_symbol' => 'AE新潟青山',
            'develop_name' => '新潟青山',
            'weather_information_id' => '11',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('shop_halls')->insert([	
            'id' => '5',
            'develop_postal_code' => '957-0061',
            'develop_address' => '新潟県新発田市住吉町5-11-5',
            'develop_building' => 'イオンモール新発田ショッピングセンター',
            'develop_symbol' => 'AM新発田',
            'develop_name' => '新発田',
            'weather_information_id' => '14',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
