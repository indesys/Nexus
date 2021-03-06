<?php

class TaskGroupSeeder extends Seeder {

    public function run()
    {
        $taskgroups = [
            ['task_force_id' => 1, 'alias' => 'Queue', 'name' => 'Task Group 99-A'],
            ['task_force_id' => 1, 'alias' => 'Mothball', 'name' => 'Task Group 99-B'],
            ['task_force_id' => 1, 'alias' => 'Admin', 'name' => 'Task Group 99-C'],

            ['task_force_id' => 2, 'alias' => 'Independents', 'name' => 'Task Group 1-Ind'],
            ['task_force_id' => 2, 'alias' => 'Fleet Command', 'name' => 'Task Group 1-A'],
            ['task_force_id' => 2, 'alias' => 'Alliance Vessels', 'name' => 'Task Group 1-B'],

            ['task_force_id' => 3, 'alias' => 'Independents', 'name' => 'Task Group 27-Ind'],
            ['task_force_id' => 3, 'alias' => 'Avengers', 'name' => 'Task Group 27-A'],
            ['task_force_id' => 3, 'alias' => 'Sentinels', 'name' => 'Task Group 27-B'],

            ['task_force_id' => 4, 'alias' => 'Independents', 'name' => 'Task Group 51-Ind'],
            ['task_force_id' => 4, 'alias' => 'Alpha', 'name' => 'Task Group 51-A'],
            ['task_force_id' => 4, 'alias' => 'Beta', 'name' => 'Task Group 51-B'],
        ];

        foreach ($taskgroups as $tg)
        {
            TaskGroupModel::create($tg);
        }
    }

}
