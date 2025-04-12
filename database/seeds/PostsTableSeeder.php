<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            ['user_id' => 1,'post_sub_category_id' => 1,'title' => '注意事項','post' => 'こちらの掲示板では誹謗中傷は禁止とします。破った場合は即退会となります。楽しく利用してください。','event_at' => now()],
            ['user_id' => 2,'post_sub_category_id' => 2,'title' => 'PCについての質問','post' => 'PCに今まで触れてこず、どんなPCを買えばいいか分からず迷っています。詳しい人教えてください！！','event_at' => now()],
        ]);

    }
}
