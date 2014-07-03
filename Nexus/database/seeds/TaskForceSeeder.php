<?php

class TaskForceSeeder extends Seeder {

    public function run()
    {
        $taskforces = [
            ['name' => 'Task Force 99', 'alias' => 'Deneb Shipyards', 'url' => 'http://www.nexusfleet.net/'],
            ['name' => 'Task Force 1', 'alias' => 'Proxima', 'url' => 'http://tf1.nexusfleet.net/', 'image' => 'tf1.jpg'],
            ['name' => 'Task Force 27', 'alias' => 'Sirius', 'url' => 'http://tf27.nexusfleet.net/', 'image' => 'tf27.jpg'],
            ['name' => 'Task Force 51', 'alias' => 'Area 51', 'url' => 'http://tf51.nexusfleet.net/', 'image' => 'tf51.jpg'],
        ];

        foreach ($taskforces as $tf)
        {
            TaskForceModel::create($tf);
        }
    }

}
