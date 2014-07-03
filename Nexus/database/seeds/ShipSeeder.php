<?php

class ShipSeeder extends Seeder {

    public function run()
    {
        $ships = [
            ['task_force_id' => 2, 'task_group_id' => 4, 'ship_class_id' => 1, 'name' => 'Starbase Frontier', 'registry' => 'SB-172', 'image' => 'sb-frontier.jpg', 'commanding_officer' => 1, 'executive_officer' => 2, 'status_id' => 3],

            ['task_force_id' => 2, 'task_group_id' => 5, 'ship_class_id' => 3, 'name' => 'USS Independence', 'registry' => 'NCC-76225', 'image' => 'independence.jpg', 'commanding_officer' => 3, 'status_id' => 2],

            ['task_force_id' => 2, 'task_group_id' => 6, 'ship_class_id' => 14, 'name' => 'IRW Valdore', 'registry' => 'IRW-V3', 'image' => 'valdore.jpg'],
            ['task_force_id' => 2, 'task_group_id' => 6, 'ship_class_id' => 13, 'name' => 'IKV QIch\'Tr', 'registry' => 'IKV-QV7423', 'image' => 'qich-tr.jpg'],
            ['task_force_id' => 2, 'task_group_id' => 6, 'ship_class_id' => 15, 'name' => 'CDS Akmar', 'registry' => 'CDS-8CG9', 'image' => 'akmar.jpg'],

            ['task_force_id' => 3, 'task_group_id' => 7, 'ship_class_id' => 2, 'name' => 'Starbase 348', 'registry' => 'SB-348'],
            ['task_force_id' => 3, 'task_group_id' => 7, 'ship_class_id' => 6, 'name' => 'USS Tripoli', 'registry' => 'NCC-71397'],

            ['task_force_id' => 3, 'task_group_id' => 8, 'ship_class_id' => 4, 'name' => 'USS Andromeda', 'registry' => 'NCC-71239'],
            ['task_force_id' => 3, 'task_group_id' => 8, 'ship_class_id' => 11, 'name' => 'USS Utopia', 'registry' => 'NCC-64418'],
            ['task_force_id' => 3, 'task_group_id' => 8, 'ship_class_id' => 9, 'name' => 'USS Ranger', 'registry' => 'NCC-63007'],
            ['task_force_id' => 3, 'task_group_id' => 8, 'ship_class_id' => 8, 'name' => 'USS Roosevelt', 'registry' => 'NCC-77613'],

            ['task_force_id' => 3, 'task_group_id' => 9, 'ship_class_id' => 3, 'name' => 'USS Harbinger', 'registry' => 'NCC-75320'],
            ['task_force_id' => 3, 'task_group_id' => 9, 'ship_class_id' => 7, 'name' => 'USS Archimedes', 'registry' => 'NCC-71713'],
            ['task_force_id' => 3, 'task_group_id' => 9, 'ship_class_id' => 11, 'name' => 'USS Endeavor', 'registry' => 'NCC-77822'],
            ['task_force_id' => 3, 'task_group_id' => 9, 'ship_class_id' => 12, 'name' => 'USS Firebird', 'registry' => 'NCC-76490'],

            ['task_force_id' => 4, 'task_group_id' => 10, 'ship_class_id' => 1, 'name' => 'Deep Space Four', 'registry' => 'DS4'],
            ['task_force_id' => 4, 'task_group_id' => 10, 'ship_class_id' => 12, 'name' => 'USS Nimitz', 'registry' => 'NCC-81231'],

            ['task_force_id' => 4, 'task_group_id' => 11, 'ship_class_id' => 10, 'name' => 'USS Ragnarok', 'registry' => 'NCC-80388'],
            ['task_force_id' => 4, 'task_group_id' => 11, 'ship_class_id' => 4, 'name' => 'USS Scimitar', 'registry' => 'NCC-71142'],
            ['task_force_id' => 4, 'task_group_id' => 11, 'ship_class_id' => 5, 'name' => 'USS Athena', 'registry' => 'NCC-69341'],
            ['task_force_id' => 4, 'task_group_id' => 11, 'ship_class_id' => 6, 'name' => 'USS Victory', 'registry' => 'NCC-70398'],

            ['task_force_id' => 4, 'task_group_id' => 12, 'ship_class_id' => 7, 'name' => 'USS Galileo', 'registry' => 'NCC-77548'],
            ['task_force_id' => 4, 'task_group_id' => 12, 'ship_class_id' => 4, 'name' => 'USS Missouri', 'registry' => 'NCC-69430'],
            ['task_force_id' => 4, 'task_group_id' => 12, 'ship_class_id' => 5, 'name' => 'USS Excalibur', 'registry' => 'NCC-80032'],
            ['task_force_id' => 4, 'task_group_id' => 12, 'ship_class_id' => 8, 'name' => 'USS Asgard', 'registry' => 'NCC-77732'],
        ];

        foreach ($ships as $ship)
        {
            ShipModel::create($ship);
        }
    }

}
