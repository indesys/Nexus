<?php

class CharacterSeeder extends Seeder {

    public function run()
    {
        $characters = [
            ['user_id' => 1, 'name' => 'Carter Verrill', 'rank_id' => 2],
            ['user_id' => 2, 'name' => 'Alyn Toromi', 'rank_id' => 5],
            ['user_id' => 3, 'name' => 'McKinley Wyler', 'rank_id' => 4],
            ['user_id' => 4, 'name' => 'Cole Llewellyn', 'rank_id' => 5],
        ];

        foreach ($characters as $character)
        {
            CharacterModel::create($character);
        }

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
