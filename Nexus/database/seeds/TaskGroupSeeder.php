<?php

class TaskGroupSeeder extends Seeder {

    public function run()
    {
        $taskgroups = [
            ['task_force_id' => 1, 'alias' => 'Independents', 'name' => 'Task Group 1-Ind'],
            ['task_force_id' => 1, 'alias' => 'Fleet Command', 'name' => 'Task Group 1-A'],
            ['task_force_id' => 1, 'alias' => 'Alliance Vessels', 'name' => 'Task Group 1-B'],

            ['task_force_id' => 2, 'alias' => 'Independents', 'name' => 'Task Group 27-Ind'],
            ['task_force_id' => 2, 'alias' => 'Avengers', 'name' => 'Task Group 27-A'],
            ['task_force_id' => 2, 'alias' => 'Sentinels', 'name' => 'Task Group 27-B'],

            ['task_force_id' => 3, 'alias' => 'Independents', 'name' => 'Task Group 51-Ind'],
            ['task_force_id' => 3, 'alias' => 'Alpha', 'name' => 'Task Group 51-A'],
            ['task_force_id' => 3, 'alias' => 'Beta', 'name' => 'Task Group 51-B'],
        ];

        foreach ($taskgroups as $tg)
        {
            TaskGroupModel::create($tg);
        }
    }

}
