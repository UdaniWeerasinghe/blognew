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
    	DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();
        //generate 3 users/authors


        DB::table('users')->insert([
        	[
        		'name' => 'Udani Shashi',
        		'email' => 'udani@test.com',
        		'password' => bcrypt('secret')
        	],
        	[
        		'name' => 'Tuan Amith',
        		'email' => 'amith@test.com',
        		'password' => bcrypt('secretlove')
        	],
        	[
        		'name' => 'Sachie Jayen',
        		'email' => 'sachi@test.com',
        		'password' => bcrypt('secretsugar')
        	],



        ]);
    }
}
