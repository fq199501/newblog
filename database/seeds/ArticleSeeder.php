<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run1()
    {
        DB::table('users')->insert([
            'title' => str_random(10),
            'body' => str_random(20),
            'user_id' => rand(1,500),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }

    public function run()
    {
        DB::table('articles')->delete();

        for ($i = 0; $i < 10; $i++){
            \App\Models\Article::create([
                'title'   => 'Title '.$i,
                'body'    => 'Body '.$i,
                'user_id' => 1,
            ]);
        }
    }
}
