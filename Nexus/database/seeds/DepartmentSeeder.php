<?php

class DepartmentSeeder extends Seeder {

    public function run()
    {
        $departments = [
            ['name' => 'Command', 'sequence' => 0],
            ['name' => 'Flight Operations', 'sequence' => 1],
            ['name' => 'Strategic Operations', 'sequence' => 2],
            ['name' => 'Security and Tactical', 'sequence' => 3],
            ['name' => 'Operations', 'sequence' => 4],
            ['name' => 'Engineering', 'sequence' => 5],
            ['name' => 'Medical and Counseling', 'sequence' => 6],
            ['name' => 'Science', 'sequence' => 7],
            ['name' => 'Intelligence', 'sequence' => 8],
            ['name' => 'Diplomatic Detachment', 'sequence' => 9],
            ['name' => 'Marine Detachment', 'sequence' => 10],
            ['name' => 'Starfighter Wing', 'sequence' => 11],
            ['name' => 'Civilian Affairs', 'sequence' => 12],

            ['name' => 'Joint Fleet Command', 'sequence' => 0, 'image' => 'jfc.jpg', 'url' => 'http://www.nexusfleet.net/', 'admin' => (int) true],
            ['name' => 'Fleet Operations', 'sequence' => 1, 'image' => 'fleetops.jpg', 'url' => 'http://ops.nexusfleet.net/', 'admin' => (int) true],
            ['name' => 'Fleet Academy', 'sequence' => 2, 'image' => 'academy.jpg', 'url' => 'http://academy.nexusfleet.net/', 'admin' => (int) true],
            ['name' => 'Personnel Management', 'sequence' => 3, 'image' => 'personnel.jpg', 'url' => 'http://opm.nexusfleet.net/', 'admin' => (int) true],
            ['name' => 'Research and Development', 'sequence' => 4, 'image' => 'randd.jpg', 'url' => 'http://randd.nexusfleet.net/', 'admin' => (int) true],
            ['name' => 'Fleet Support Staff', 'sequence' => 5, 'image' => 'fleetsupport.jpg', 'url' => 'http://www.nexusfleet.net/', 'admin' => (int) true],
            ['name' => 'Judge Advocate General', 'sequence' => 6, 'image' => 'jag.jpg', 'url' => 'http://jag.nexusfleet.net/', 'admin' => (int) true],
        ];

        foreach ($departments as $dept)
        {
            DepartmentModel::create($dept);
        }
    }

}
