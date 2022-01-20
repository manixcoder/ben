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
        DB::table('users')->delete();
		$userData = array(
			array(
				'id' => 1,
				'name' => 'administrator',
				'email' => 'admin@gmail.com',
				'email_verified_at' =>  date("Y-m-d H:i:s"),
				'password' => bcrypt('plokijuh@123'),
				'remember_token' => null,
				'created_at' =>  date("Y-m-d H:i:s"),
				'updated_at' =>  date("Y-m-d H:i:s"),
			),
			
		);
		DB::table('users')->insert($userData);
    }
}
