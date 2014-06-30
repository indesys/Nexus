<?php

class ShipSeeder extends Seeder {

    public function run()
    {
        $ships = [
            ['task_group_id' => 1, 'name' => 'USS Elysium'],
            ['task_group_id' => 1, 'name' => 'USS Wolf'],
            ['task_group_id' => 1, 'name' => 'USS Hiroshima'],
            ['task_group_id' => 1, 'name' => 'SS Mary Rose'],

            ['task_group_id' => 2, 'name' => 'USS Utopia'],

            ['task_group_id' => 3, 'name' => 'USS Einstein'],
            ['task_group_id' => 3, 'name' => 'USS Bunker Hill'],
            ['task_group_id' => 3, 'name' => 'USS Eclipse'],
            ['task_group_id' => 3, 'name' => 'USS Guinevere'],
            ['task_group_id' => 3, 'name' => 'USS Orion'],
            ['task_group_id' => 3, 'name' => 'USS Tokyo'],
            ['task_group_id' => 3, 'name' => 'SS Hawkes'],

            ['task_group_id' => 4, 'name' => 'USS Forseti'],
            ['task_group_id' => 4, 'name' => 'Starbase 249'],
            ['task_group_id' => 4, 'name' => 'USS Liberator'],
            ['task_group_id' => 4, 'name' => 'USS Majestic'],
            ['task_group_id' => 4, 'name' => 'USS Nagasaki'],
            ['task_group_id' => 4, 'name' => 'USS Ramses'],
            ['task_group_id' => 4, 'name' => 'USS Tripoli'],

            ['task_group_id' => 5, 'name' => 'USS Sarek'],
            ['task_group_id' => 5, 'name' => 'Deep Space 5'],
            ['task_group_id' => 5, 'name' => 'USS Andromeda'],
            ['task_group_id' => 5, 'name' => 'USS Ardeshir'],
            ['task_group_id' => 5, 'name' => 'USS Marshal'],
            ['task_group_id' => 5, 'name' => 'USS Ranger'],
            ['task_group_id' => 5, 'name' => 'USS Roosevelt'],

            ['task_group_id' => 6, 'name' => 'USS Achilles'],

            ['task_group_id' => 7, 'name' => 'Starbase 80'],
            ['task_group_id' => 7, 'name' => 'USS Chesapeake'],
            ['task_group_id' => 7, 'name' => 'USS Samurai'],
            ['task_group_id' => 7, 'name' => 'USS Ragnarok'],
            ['task_group_id' => 7, 'name' => 'USS Scimitar'],
            ['task_group_id' => 7, 'name' => 'USS Athena'],
            ['task_group_id' => 7, 'name' => 'USS Victory'],

            ['task_group_id' => 8, 'name' => 'USS Harbinger'],
            ['task_group_id' => 8, 'name' => 'Triton Seabase'],
            ['task_group_id' => 8, 'name' => 'Obsidian Colony'],
            ['task_group_id' => 8, 'name' => 'USS Missouri'],
            ['task_group_id' => 8, 'name' => 'USS Argent'],
            ['task_group_id' => 8, 'name' => 'USS Regent'],
            ['task_group_id' => 8, 'name' => 'USS Draconis'],

            ['task_group_id' => 9, 'name' => 'Langley Station'],
            ['task_group_id' => 9, 'name' => 'SFMC Aleron'],
            ['task_group_id' => 9, 'name' => 'USS Atlantic'],
            ['task_group_id' => 9, 'name' => 'Starbase 47'],
            ['task_group_id' => 9, 'name' => 'USS Gladiator'],
            ['task_group_id' => 9, 'name' => 'USS Century'],
            ['task_group_id' => 9, 'name' => 'USS Excalibur'],

            ['task_group_id' => 10, 'name' => 'USS Nimitz'],

            ['task_group_id' => 11, 'name' => 'USS Galileo'],
            ['task_group_id' => 11, 'name' => 'Leto Colony'],
            ['task_group_id' => 11, 'name' => 'USS Ashpodel'],
            ['task_group_id' => 11, 'name' => 'USS Endeavor'],
            ['task_group_id' => 11, 'name' => 'USS Firebird'],
            ['task_group_id' => 11, 'name' => 'USS Halley'],
            ['task_group_id' => 11, 'name' => 'USS Portland'],

            ['task_group_id' => 12, 'name' => 'USS Cavalry'],
            ['task_group_id' => 12, 'name' => 'Starbase Protector'],
            ['task_group_id' => 12, 'name' => 'USS Andoria'],
            ['task_group_id' => 12, 'name' => 'USS Archimedes'],
            ['task_group_id' => 12, 'name' => 'USS Ares'],
            ['task_group_id' => 12, 'name' => 'USS Sentinel'],
            ['task_group_id' => 12, 'name' => 'USS Vigilant'],

            ['task_group_id' => 13, 'name' => 'USS Crown'],
            ['task_group_id' => 13, 'name' => 'USS Apollo'],
            ['task_group_id' => 13, 'name' => 'USS Asgard'],
            ['task_group_id' => 13, 'name' => 'USS Gemini'],
            ['task_group_id' => 13, 'name' => 'USS Eagle'],
            ['task_group_id' => 13, 'name' => 'USS Livingston'],
            ['task_group_id' => 13, 'name' => 'USS Yorktown'],
        ];

        foreach ($ships as $ship)
        {
            ShipModel::create($ship);
        }
    }

}
