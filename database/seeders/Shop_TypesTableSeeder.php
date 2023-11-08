<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Shop_TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shop_types')->insert([	
            'id' => '1',
            'shop_type_name' => 'ミスタードーナツ',
            'shop_work_content' => '(MD)',
            'working_hour_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('shop_types')->insert([	
            'id' => '2',
            'shop_type_name' => 'はなまるうどん',
            'shop_work_content' => '(HU)うどん、惣菜類の製造、販売およびその他これらに付随する業務',
            'working_hour_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('shop_types')->insert([	
            'id' => '3',
            'shop_type_name' => 'コメダ珈琲',
            'shop_work_content' => '(KC)調理および接客並びにこれらに付随する業務',
            'working_hour_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('shop_types')->insert([	
            'id' => '4',
            'shop_type_name' => '大戸屋',
            'shop_work_content' => '(OT)製造および接客並びにこれに付随する業務',
            'working_hour_id' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
    }
}
