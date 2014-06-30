<?php

class TaskGroupSeeder extends Seeder {

    public function run()
    {
        $taskgroups = [
            ['task_force_id' => 1, 'name' => 'Task Group 1-Independent'],

            ['task_force_id' => 2, 'name' => 'Task Group 21-Independent'],
            ['task_force_id' => 2, 'name' => 'Task Group 21-A'],
            ['task_force_id' => 2, 'name' => 'Task Group 21-B'],
            ['task_force_id' => 2, 'name' => 'Task Group 21-C'],

            ['task_force_id' => 3, 'name' => 'Task Group 47-Independent'],
            ['task_force_id' => 3, 'name' => 'Task Group 47-A'],
            ['task_force_id' => 3, 'name' => 'Task Group 47-B'],
            ['task_force_id' => 3, 'name' => 'Task Group 47-C'],

            ['task_force_id' => 4, 'name' => 'Task Group 72-Independent'],
            ['task_force_id' => 4, 'name' => 'Task Group 72-A'],
            ['task_force_id' => 4, 'name' => 'Task Group 72-B'],
            ['task_force_id' => 4, 'name' => 'Task Group 72-C'],
        ];

        foreach ($taskgroups as $tg)
        {
            TaskGroupModel::create($tg);
        }
    }

}
