<?php

use Illuminate\Database\Seeder;

class PostMainCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_main_categories')->insert([
            ['main_category' => 'お知らせ'],
            ['main_category' => '質問'],
        ]);

    }
}
