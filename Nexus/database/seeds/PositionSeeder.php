<?php

class PositionSeeder extends Seeder {

    public function run()
    {
        $positions = [
            ['dept_id' => 1, 'name' => 'Commanding Officer', 'order' => 0],
            ['dept_id' => 1, 'name' => 'Executive Officer', 'order' => 1],

            ['dept_id' => 2, 'name' => 'Chief Flight Control Officer', 'order' => 0],

            ['dept_id' => 3, 'name' => 'Chief Engineer', 'order' => 0],

            ['dept_id' => 4, 'name' => 'Chief Security/Tactical Officer', 'order' => 0],
            ['dept_id' => 4, 'name' => 'Security Officer', 'order' => 1],

            ['dept_id' => 5, 'name' => 'Chief Medical Officer', 'order' => 0],
            ['dept_id' => 5, 'name' => 'Nurse', 'order' => 1],

            ['dept_id' => 6, 'name' => 'Chief Science Officer', 'order' => 0],

            ['dept_id' => 7, 'name' => 'Fleet Admiral', 'order' => 0],

            ['dept_id' => 8, 'name' => 'Chief of Staff', 'order' => 0],
            ['dept_id' => 8, 'name' => 'Director of Personnel', 'order' => 1],

            ['dept_id' => 9, 'name' => 'Academy Commandant', 'order' => 0],
            ['dept_id' => 9, 'name' => 'Instructor', 'order' => 1],

            ['dept_id' => 10, 'name' => 'Judge Advocate General', 'order' => 0],
            ['dept_id' => 10, 'name' => 'Lawyer', 'order' => 1],
        ];

        foreach ($positions as $position)
        {
            PositionModel::create($position);
        }
    }

}
