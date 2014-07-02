<?php

class ShipSeeder extends Seeder {

    public function run()
    {
        $ships = [
            ['task_group_id' => 1, 'name' => 'Starbase Frontier'],

            ['task_group_id' => 2, 'name' => 'USS Independence'],

            ['task_group_id' => 3, 'name' => 'IRW Valdore'],
            ['task_group_id' => 3, 'name' => 'IKV QIch Tr'],
            ['task_group_id' => 3, 'name' => 'CDS Akmar'],

            ['task_group_id' => 4, 'name' => 'Starbase 348'],
            ['task_group_id' => 4, 'name' => 'USS Tripoli'],

            ['task_group_id' => 5, 'name' => 'USS Andromeda'],
            ['task_group_id' => 5, 'name' => 'USS Utopia'],
            ['task_group_id' => 5, 'name' => 'USS Ranger'],
            ['task_group_id' => 5, 'name' => 'USS Roosevelt'],

            ['task_group_id' => 6, 'name' => 'USS Galileo'],
            ['task_group_id' => 6, 'name' => 'USS Archimedes'],
            ['task_group_id' => 6, 'name' => 'USS Endeavor'],
            ['task_group_id' => 6, 'name' => 'USS Firebird'],

            ['task_group_id' => 7, 'name' => 'Starbase 80'],
            ['task_group_id' => 7, 'name' => 'USS Nimitz'],

            ['task_group_id' => 8, 'name' => 'USS Ragnarok'],
            ['task_group_id' => 8, 'name' => 'USS Scimitar'],
            ['task_group_id' => 8, 'name' => 'USS Athena'],
            ['task_group_id' => 8, 'name' => 'USS Victory'],

            ['task_group_id' => 9, 'name' => 'USS Harbinger'],
            ['task_group_id' => 9, 'name' => 'USS Missouri'],
            ['task_group_id' => 9, 'name' => 'USS Excalibur'],
            ['task_group_id' => 9, 'name' => 'USS Asgard'],
        ];

        foreach ($ships as $ship)
        {
            ShipModel::create($ship);
        }
    }

}
