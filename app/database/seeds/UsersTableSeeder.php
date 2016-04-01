<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
                User::create([
                            'name' => 'administrator',
                            'username' =>"admin",
                             'email' => "muhammadusamariaz@gmail.com",
                             'password' => Hash::make('pass'),
                            'isAdmin' => '1'
			]);
		foreach(range(1, 10) as $index)
		{
			User::create([
                            'name' => $faker->name,
                            'username' =>$faker->username,
                             'email' => $faker->email,
                             'password' => Hash::make('pass'),
                            'isAdmin' => '0'
			]);
		}
	}

}