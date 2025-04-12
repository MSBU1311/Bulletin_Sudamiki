<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['username' => 'SudaMiki','email' => 'miki@aaa','password' => 'mikimiki','admin_role' => 1],
            ['username' => 'KatoSayaka','email' => 'Sayaka@aaa','password' => 'sayakasayaka','admin_role' => 10],
            ['username' => 'MaedaKenji','email' => 'Kenji@aaa','password' => 'kenjikenji','admin_role' => 10],
            ['username' => 'KominataAi','email' => 'Ai@aaa','password' => 'aiaiaiai','admin_role' => 10],
            ['username' => 'KaiTakeru','email' => 'Takeru@aaa','password' => 'takerutakeru','admin_role' => 10]
        ]);
    }
}
