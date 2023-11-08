<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Working_HoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('working_hours')->insert([	
            'id' => '1',
            'shop_type_symbol' => 'MD',
            'opening_work' => '0',
            'Preparation' => '0',
            'payment' => '0',
            'order_work' => '0',
            '4S_Pre_closing' => '0',
            'closing_work' => '0',
            'manager_work' => '0',
            'training' => '0',
            'appointment' => '0',
            'seven_million_over' => '9.5',
            'ten_million_over' => '0.5',
            'Person_hour_sales' => '8000',
            'Minimum_sales_staff' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('working_hours')->insert([	
            'id' => '2',
            'shop_type_symbol' => 'HU',
            'opening_work' => '1.5',
            'Preparation' => '1',
            'payment' => '0.5',
            'order_work' => '0.5',
            '4S_Pre_closing' => '2',
            'closing_work' => '1.5',
            'manager_work' => '1',
            'training' => '1',
            'appointment' => '0.5',
            'seven_million_over' => '0.5',
            'ten_million_over' => '1',
            'Person_hour_sales' => '10000',
            'Minimum_sales_staff' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('working_hours')->insert([	
            'id' => '3',
            'shop_type_symbol' => 'KC',
            'opening_work' => '1',
            'Preparation' => '4',
            'payment' => '0.5',
            'order_work' => '0.5',
            '4S_Pre_closing' => '2',
            'closing_work' => '1.5',
            'manager_work' => '1',
            'training' => '1',
            'appointment' => '0.5',
            'seven_million_over' => '0.5',
            'ten_million_over' => '1',
            'Person_hour_sales' => '8000',
            'Minimum_sales_staff' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('working_hours')->insert([	
            'id' => '4',
            'shop_type_symbol' => 'OT',
            'opening_work' => '1.5',
            'Preparation' => '4',
            'payment' => '0.5',
            'order_work' => '0.5',
            '4S_Pre_closing' => '2',
            'closing_work' => '1.5',
            'manager_work' => '1',
            'training' => '1',
            'appointment' => '0.5',
            'seven_million_over' => '0.5',
            'ten_million_over' => '1',
            'Person_hour_sales' => '8000',
            'Minimum_sales_staff' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
