<?php

class TaskForceSeeder extends Seeder {

    public function run()
    {
        $taskforces = [
            ['name' => 'Task Force 1', 'alias' => 'Proxima'],
            ['name' => 'Task Force 27', 'alias' => 'Sirius'],
            ['name' => 'Task Force 51', 'alias' => 'Area 51'],
        ];

        foreach ($taskforces as $tf)
        {
            TaskForceModel::create($tf);
        }
    }

}
