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
        DB::table('users')->insert([
        'name' => "Nguyen Dang Tich",
        'email' => "ndtich@gmail.com",
        'password' => bcrypt('1234'),
        ]);
    }
}
