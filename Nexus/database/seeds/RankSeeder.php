<?php

class RankSeeder extends Seeder {

    public function run()
    {
        $ranks = [
            ['name' => 'Admiral', 'short_name' => 'ADM', 'image' => 'r-a4.png'],
            ['name' => 'Vice Admiral', 'short_name' => 'VADM', 'image' => 'r-a3.png'],
            ['name' => 'Rear Admiral', 'short_name' => 'RADM', 'image' => 'r-a2.png'],
            ['name' => 'Commodore', 'short_name' => 'CDRE', 'image' => 'r-a1.png'],
            ['name' => 'Captain', 'short_name' => 'CAPT', 'image' => 'r-o6.png'],
            ['name' => 'Commander', 'short_name' => 'CDR', 'image' => 'r-o5.png'],
            ['name' => 'Lieutenant Commander', 'short_name' => 'LCDR', 'image' => 'r-o4.png'],
            ['name' => 'Lieutenant', 'short_name' => 'LT', 'image' => 'r-o3.png'],
            ['name' => 'Lieutenant JG', 'short_name' => 'LTJG', 'image' => 'r-o2.png'],
            ['name' => 'Ensign', 'short_name' => 'ENS', 'image' => 'r-o1.png'],
            ['name' => 'Master Chief Petty Officer', 'short_name' => 'MCPO', 'image' => 'r-e8.png'],
            ['name' => 'Senior Chief Petty Officer', 'short_name' => 'SCPO', 'image' => 'r-e7.png'],
            ['name' => 'Chief Petty Officer', 'short_name' => 'CPO', 'image' => 'r-e6.png'],
            ['name' => 'Petty Officer 1st Class', 'short_name' => 'PO1', 'image' => 'r-e5.png'],
            ['name' => 'Petty Officer 2nd Class', 'short_name' => 'PO2', 'image' => 'r-e4.png'],
            ['name' => 'Petty Officer 3rd Class', 'short_name' => 'PO3', 'image' => 'r-e3.png'],
            ['name' => 'Crewman', 'short_name' => 'CM', 'image' => 'r-e2.png'],
            ['name' => 'Crewman Recruit', 'short_name' => 'CMRT', 'image' => 'r-e1.png'],
        ];

        foreach ($ranks as $rank)
        {
            RankModel::create($rank);
        }
    }

}
