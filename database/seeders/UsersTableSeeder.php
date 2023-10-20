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
            'role_id' => '91',
            'holiday_calendar_type' => 'A',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('users')->insert([	
            'employee_id' => '102',
            'employee_code' => '12',
            'name' => '毛利 小五郎',
            'email' => 'c_kairouschance@yahoo.co.jp',
            'password' => bcrypt('e3QzvA2!'),
            'role_id' => '7',
            'holiday_calendar_type' => 'A',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('users')->insert([	
            'employee_id' => '103',
            'employee_code' => '13',
            'name' => '毛利 蘭',
            'email' => 'm_kairouschance@ymail.ne.jp',
            'password' => bcrypt('nL8M)#+p'),
            'role_id' => '6',
            'holiday_calendar_type' => 'A',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('users')->insert([	
            'employee_id' => '104',
            'employee_code' => '14',
            'name' => '妃 英理',
            'email' => 'eri@exsample.com',
            'password' => bcrypt('Pq4#g&%G'),
            'role_id' => '5',
            'holiday_calendar_type' => 'A',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('users')->insert([	
            'employee_id' => '105',
            'employee_code' => '15',
            'name' => '工藤 優作',
            'email' => 'yuusaku@exsample.com',
            'password' => bcrypt('9|fMxM8n'),
            'role_id' => '5',
            'holiday_calendar_type' => 'A',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('users')->insert([	
            'employee_id' => '106',
            'employee_code' => '16',
            'name' => '工藤 有希子',
            'email' => 'yukiko@exsample.com',
            'password' => bcrypt('Peq=I>X5'),
            'role_id' => '4',
            'holiday_calendar_type' => 'A',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('users')->insert([	
            'employee_id' => '107',
            'employee_code' => '17',
            'name' => '赤井 秀一',
            'email' => 'syuuichi@exsample.com',
            'password' => bcrypt('pIDa!Dm='),
            'role_id' => '4',
            'holiday_calendar_type' => 'B',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('users')->insert([	
            'employee_id' => '108',
            'employee_code' => '18',
            'name' => '安室 透',
            'email' => 'tooru@exsample.com',
            'password' => bcrypt('c!IU3KZ]'),
            'role_id' => '3',
            'holiday_calendar_type' => 'B',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('users')->insert([	
            'employee_id' => '109',
            'employee_code' => '19',
            'name' => '松本 清長',
            'email' => 'kiyonaga@exsample.com',
            'password' => bcrypt('%-1)VpUH'),
            'role_id' => '3',
            'holiday_calendar_type' => 'B',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('users')->insert([	
            'employee_id' => '110',
            'employee_code' => '20',
            'name' => '黒田 兵衛',
            'email' => 'hyoue@exsample.com',
            'password' => bcrypt('i2@TD/WZ'),
            'role_id' => '2',
            'holiday_calendar_type' => 'B',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('users')->insert([	
            'employee_id' => '111',
            'employee_code' => '21',
            'name' => '目暮 十三',
            'email' => 'juuzou@exsample.com',
            'password' => bcrypt('W^aQA5YB'),
            'role_id' => '2',
            'holiday_calendar_type' => 'B',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('users')->insert([	
            'employee_id' => '112',
            'employee_code' => '22',
            'name' => '佐藤 美和子',
            'email' => 'miwako@exsample.com',
            'password' => bcrypt('<TTkV)(Y'),
            'role_id' => '2',
            'holiday_calendar_type' => 'B',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('users')->insert([	
            'employee_id' => '113',
            'employee_code' => '23',
            'name' => '高木 渉',
            'email' => 'wataru@exsample.com',
            'password' => bcrypt('um!S]31B'),
            'role_id' => '2',
            'holiday_calendar_type' => 'B',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
