<?php

class TaskForceSeeder extends Seeder {

    public function run()
    {
        $taskforces = [
            ['name' => 'Independent Fleet Operations'],
            ['name' => 'Task Force 21'],
            ['name' => 'Task Force 47'],
            ['name' => 'Task Force 72'],
        ];

        foreach ($taskforces as $tf)
        {
            TaskForceModel::create($tf);
        }
    }

}
