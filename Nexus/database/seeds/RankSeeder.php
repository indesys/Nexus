<?php

class RankSeeder extends Seeder {

    public function run()
    {
        $ranks = [
            ['name' => 'Admiral', 'image' => 'r-a4.png'],
            ['name' => 'Captain', 'image' => 'r-o6.png'],
            ['name' => 'Commander', 'image' => 'r-o5.png'],
            ['name' => 'Lieutenant Commander', 'image' => 'r-o4.png'],
            ['name' => 'Lieutenant', 'image' => 'r-o3.png'],
            ['name' => 'Lieutenant JG', 'image' => 'r-o2.png'],
            ['name' => 'Ensign', 'image' => 'r-o1.png'],
            ['name' => 'Chief Petty Officer', 'image' => 'r-e6.png'],
            ['name' => 'Petty Officer 2nd Class', 'image' => 'r-e4.png'],
            ['name' => 'Crewman', 'image' => 'r-e2.png'],
        ];

        foreach ($ranks as $rank)
        {
            RankModel::create($rank);
        }
    }

}
