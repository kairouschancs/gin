<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([	
            'employee_id' => '101',
            'employee_code' => '11',
            'name' => '江戸川 コナン',
            'email' => 'oyo_food_oyo@yahoo.co.jp',
            'password' => bcrypt('n7Frye/u'),
            'holiday_calendar_type' => 'A',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
    }
}
