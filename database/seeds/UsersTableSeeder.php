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
        DB::table('users')->insert([
            ['name' => 'Dimuthu Sandaruwan Jayalath', 'email' => 'jayalathdimuthu@gmail.com', 'password' => bcrypt('password')],
            ['name' => 'Nelka Arosh', 'email' => 'nelka@gmail.com', 'password' => bcrypt('password')]
        ]);
    }
}
