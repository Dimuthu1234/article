<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert(
            ['name' => 'Dimuthu Sandaruwan Jayalath', 'email' => 'jayalathdimuthu@gmail.com', 'password' => bcrypt('password'), 'job_title' => 'Admin'],
            ['name' => 'Nelka Arosh', 'email' => 'nelka@gmail.com', 'password' => bcrypt('password'), 'job_title' => 'Admin']
        );
    }
}
