<?php

class CharacterSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        for ($c = 1; $c <= 50; $c++)
        {
            CharacterModel::create([
                'user_id' => $faker->numberBetween(1, 25),
                'name' => $faker->firstName(null)." ".$faker->lastName(null),
                'rank_id' => $faker->numberBetween(1, 10),
            ]);
        }
    }

}
