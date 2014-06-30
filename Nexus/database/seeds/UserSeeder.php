<?php

class UserSeeder extends Seeder {

	public function run()
	{
        $faker = Faker\Factory::create();

        for ($u = 1; $u <= 25; $u++)
        {
            UserModel::create([
                'name' => $faker->firstName(null)." ".$faker->lastName(null),
                'email' => $faker->safeEmail
            ]);
        }
	}

}
