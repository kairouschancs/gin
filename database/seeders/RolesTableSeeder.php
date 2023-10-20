<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([	
            'id' => '0',
            'class' => 'Guest',
            'role' => 'Guest',
            'role_summary' => 'ゲスト',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('roles')->insert([	
            'id' => '1',
            'class' => 'Staff',
            'role' => 'Staff',
            'role_summary' => 'スタッフ',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('roles')->insert([	
            'id' => '2',
            'class' => 'Employee',
            'role' => 'SS',
            'role_summary' => '社員',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('roles')->insert([	
            'id' => '3',
            'class' => 'Employee',
            'role' => 'Ast',
            'role_summary' => '副店長',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('roles')->insert([	
            'id' => '4',
            'class' => 'Employee',
            'role' => 'St',
            'role_summary' => '店長',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('roles')->insert([	
            'id' => '5',
            'class' => 'Employee',
            'role' => 'Mgr',
            'role_summary' => 'マネージャー',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('roles')->insert([	
            'id' => '6',
            'class' => 'Employee',
            'role' => 'Srmgr',
            'role_summary' => 'シニア・マネージャー',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('roles')->insert([	
            'id' => '7',
            'class' => 'Employee',
            'role' => 'Gmgr',
            'role_summary' => 'ゼネラル・マネージャー',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('roles')->insert([	
            'id' => '21',
            'class' => 'Shop',
            'role' => 'Shop_TypeA',
            'role_summary' => '店舗',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('roles')->insert([	
            'id' => '22',
            'class' => 'Shop',
            'role' => 'Shop_TypeB',
            'role_summary' => '店舗（営業日報/水光熱あり）',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);	
        DB::table('roles')->insert([	
            'id' => '91',
            'class' => 'Admin',
            'role' => 'Admin',
            'role_summary' => '管理者',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
