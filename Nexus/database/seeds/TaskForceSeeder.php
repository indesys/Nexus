<?php

class TaskForceSeeder extends Seeder {

    public function run()
    {
        $taskforces = [
            ['name' => 'Task Force 1', 'alias' => 'Proxima', 'url' => 'http://tf1.nexusfleet.net/'],
            ['name' => 'Task Force 27', 'alias' => 'Sirius', 'url' => 'http://tf27.nexusfleet.net/'],
            ['name' => 'Task Force 51', 'alias' => 'Area 51', 'url' => 'http://tf51.nexusfleet.net/'],
        ];

        foreach ($taskforces as $tf)
        {
            TaskForceModel::create($tf);
        }
    }

}
