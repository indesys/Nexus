<?php

class DepartmentSeeder extends Seeder {

    public function run()
    {
        $departments = [
            ['name' => 'Command', 'order' => 0],
            ['name' => 'Flight Operations', 'order' => 1],
            ['name' => 'Engineering', 'order' => 2],
            ['name' => 'Security/Tactical', 'order' => 3],
            ['name' => 'Medical', 'order' => 4],
            ['name' => 'Science', 'order' => 5],

            ['name' => 'Joint Fleet Command', 'order' => 0, 'admin' => (int) true],
            ['name' => 'Fleet Support Staff', 'order' => 1, 'admin' => (int) true],
            ['name' => 'Fleet Academy', 'order' => 2, 'admin' => (int) true],
            ['name' => 'Judge Advocate General', 'order' => 3, 'admin' => (int) true],
        ];

        foreach ($departments as $dept)
        {
            DepartmentModel::create($dept);
        }
    }

}
