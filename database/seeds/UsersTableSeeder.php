<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
           'name' => 'Aram Drambyan',
            'email' => 'ardrambyan@gmail.com',
            'password' => bcrypt('gortik99'),
            'remember_token' => str_random(10),
        ]);
    }
}
