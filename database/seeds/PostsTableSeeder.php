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
        //
        for($i = 0; $i < 5; ++$i) {
            DB::table('posts')->insert([
                'title' => str_random(10),
                'body' => str_random(50),
            ]);
        }
    }
}
