<?php

class TaskForceSeeder extends Seeder {

    public function run()
    {
        $taskforces = [
            ['number' => '1', 'name' => 'Independent Fleet Operations'],
            ['number' => '27', 'name' => 'Tethys'],
            ['number' => '51', 'name' => 'Cronus'],
        ];

        foreach ($taskforces as $tf)
        {
            TaskForceModel::create($tf);
        }
    }

}
