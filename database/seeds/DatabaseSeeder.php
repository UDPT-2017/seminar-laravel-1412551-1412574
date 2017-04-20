<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hangsp')->insert(['idloaisp' => '1','tenhangsp' => 'Apple',]);
        DB::table('hangsp')->insert(['idloaisp' => '1','tenhangsp' => 'SamSung',]);
        DB::table('hangsp')->insert(['idloaisp' => '1','tenhangsp' => 'Oppo',]);
        DB::table('hangsp')->insert(['idloaisp' => '1','tenhangsp' => 'Sonny',]);
        DB::table('hangsp')->insert(['idloaisp' => '2','tenhangsp' => 'Apple-iPad',]);
        DB::table('hangsp')->insert(['idloaisp' => '2','tenhangsp' => 'SamSung',]);
        DB::table('hangsp')->insert(['idloaisp' => '2','tenhangsp' => 'Asus',]);
        DB::table('hangsp')->insert(['idloaisp' => '3','tenhangsp' => 'Sạc dự phòng',]);
        DB::table('hangsp')->insert(['idloaisp' => '3','tenhangsp' => 'Ốp lưng',]);
        DB::table('hangsp')->insert(['idloaisp' => '3','tenhangsp' => 'Tai nghe',]);
        DB::table('hangsp')->insert(['idloaisp' => '4','tenhangsp' => 'Sửa chữ iPhone/iPad',]);
    }
}
