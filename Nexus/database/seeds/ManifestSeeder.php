<?php

class ManifestSeeder extends Seeder {

    public function run()
    {
        $characters = [
            ['ship_id' => 0, 'character_id' => 1, 'position_id' => 83],
            ['ship_id' => 1, 'character_id' => 1, 'position_id' => 1],
            ['ship_id' => 0, 'character_id' => 2, 'position_id' => 84],
            ['ship_id' => 1, 'character_id' => 2, 'position_id' => 2],
            ['ship_id' => 2, 'character_id' => 3, 'position_id' => 1],
            ['ship_id' => 0, 'character_id' => 3, 'position_id' => 100],
            ['ship_id' => 2, 'character_id' => 4, 'position_id' => 3],
            ['ship_id' => 1, 'character_id' => 5, 'position_id' => 4],
        ];

        foreach ($characters as $character)
        {
            ManifestModel::create($character);
        }
    }

}
