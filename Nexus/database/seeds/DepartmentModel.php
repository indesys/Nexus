<?php

class DepartmentSeeder extends Seeder {

    public function run()
    {
        $departments = [
            ['name' => 'Command', 'dpt_order' => 0],
            ['name' => 'Flight Operations', 'dpt_order' => 1],
            ['name' => 'Strategic Operations', 'dpt_order' => 2],
            ['name' => 'Security and Tactical', 'dpt_order' => 3],
            ['name' => 'Operations', 'dpt_order' => 4],
            ['name' => 'Engineering', 'dpt_order' => 5],
            ['name' => 'Medical and Counseling', 'dpt_order' => 6],
            ['name' => 'Science', 'dpt_order' => 7],
            ['name' => 'Intelligence', 'dpt_order' => 8],
            ['name' => 'Diplomatic Detachment', 'dpt_order' => 9],
            ['name' => 'Marine Detachment', 'dpt_order' => 10],
            ['name' => 'Starfighter Wing', 'dpt_order' => 11],
            ['name' => 'Civilian Affairs', 'dpt_order' => 12],

            ['name' => 'Joint Fleet Command', 'dpt_order' => 0, 'image' => 'jfc.jpg', 'url' => 'http://www.nexusfleet.net/', 'admin' => (int) true],
            ['name' => 'Fleet Operations', 'dpt_order' => 1, 'image' => 'fleetops.jpg', 'url' => 'http://ops.nexusfleet.net/', 'admin' => (int) true],
            ['name' => 'Fleet Academy', 'dpt_order' => 2, 'image' => 'academy.jpg', 'url' => 'http://academy.nexusfleet.net/', 'admin' => (int) true],
            ['name' => 'Personnel Management', 'dpt_order' => 3, 'image' => 'personnel.jpg', 'url' => 'http://opm.nexusfleet.net/', 'admin' => (int) true],
            ['name' => 'Research and Development', 'dpt_order' => 4, 'image' => 'randd.jpg', 'url' => 'http://randd.nexusfleet.net/', 'admin' => (int) true],
            ['name' => 'Fleet Support Staff', 'dpt_order' => 5, 'image' => 'fleetsupport.jpg', 'url' => 'http://www.nexusfleet.net/', 'admin' => (int) true],
            ['name' => 'Judge Advocate General', 'dpt_order' => 6, 'image' => 'jag.jpg', 'url' => 'http://jag.nexusfleet.net/', 'admin' => (int) true],
        ];

        foreach ($departments as $dept)
        {
            DepartmentModel::create($dept);
        }
    }

}
