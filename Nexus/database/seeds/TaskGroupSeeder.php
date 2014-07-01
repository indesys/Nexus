<?php

class TaskGroupSeeder extends Seeder {

    public function run()
    {
        $taskgroups = [
            ['task_force_id' => 1, 'group_code' => 'Independent', 'name' => 'Independent'],
            ['task_force_id' => 1, 'group_code' => 'A', 'name' => 'Fleet Command'],
            ['task_force_id' => 1, 'group_code' => 'B', 'name' => 'Alliances'],

            ['task_force_id' => 2, 'group_code' => 'Independent', 'name' => 'Independent'],
            ['task_force_id' => 2, 'group_code' => 'A', 'name' => 'Avengers'],
            ['task_force_id' => 2, 'group_code' => 'B', 'name' => 'Protectors'],

            ['task_force_id' => 3, 'group_code' => 'Independent', 'name' => 'Independent'],
            ['task_force_id' => 3, 'group_code' => 'A', 'name' => 'Honour Guards'],
            ['task_force_id' => 3, 'group_code' => 'B', 'name' => 'Sentries'],
        ];

        foreach ($taskgroups as $tg)
        {
            TaskGroupModel::create($tg);
        }
    }

}
