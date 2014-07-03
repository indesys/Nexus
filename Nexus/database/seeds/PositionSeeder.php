<?php

class PositionSeeder extends Seeder {

    public function run()
    {
        $positions = [
            ['dept_id' => 1, 'name' => 'Commanding Officer', 'sequence' => 0],
            ['dept_id' => 1, 'name' => 'Executive Officer', 'sequence' => 1],
            ['dept_id' => 1, 'name' => 'Second Officer', 'sequence' => 2],
            ['dept_id' => 1, 'name' => 'Chief of the Boat', 'sequence' => 3],
            ['dept_id' => 1, 'name' => 'Mission Adviser', 'sequence' => 4],
            ['dept_id' => 1, 'name' => 'Yeoman', 'sequence' => 5],

            ['dept_id' => 2, 'name' => 'Chief Flight Control Officer', 'sequence' => 0],
            ['dept_id' => 2, 'name' => 'Assistant Chief Flight Control Officer', 'sequence' => 1],
            ['dept_id' => 2, 'name' => 'Flight Control Officer', 'sequence' => 2],
            ['dept_id' => 2, 'name' => 'Shuttle Bay Manager', 'sequence' => 3],
            ['dept_id' => 2, 'name' => 'Chief Support Craft Pilot', 'sequence' => 4],

            ['dept_id' => 3, 'name' => 'Chief Strategic Operations Officer', 'sequence' => 0],
            ['dept_id' => 3, 'name' => 'Assistant Chief Strategic Operations Officer', 'sequence' => 1],
            ['dept_id' => 3, 'name' => 'Strategic Operations Officer', 'sequence' => 2],

            ['dept_id' => 4, 'name' => 'Chief Security/Tactical Officer', 'sequence' => 0],
            ['dept_id' => 4, 'name' => 'Assistant Chief Security/Tactical Officer', 'sequence' => 1],
            ['dept_id' => 4, 'name' => 'Security Officer', 'sequence' => 2],
            ['dept_id' => 4, 'name' => 'Tactical Officer', 'sequence' => 3],
            ['dept_id' => 4, 'name' => 'Security Investigations Officer', 'sequence' => 4],
            ['dept_id' => 4, 'name' => 'Brig Officer', 'sequence' => 5],
            ['dept_id' => 4, 'name' => 'Master-At-Arms', 'sequence' => 6],

            ['dept_id' => 5, 'name' => 'Chief Operations Officer', 'sequence' => 0],
            ['dept_id' => 5, 'name' => 'Assistant Chief Operations Officer', 'sequence' => 1],
            ['dept_id' => 5, 'name' => 'Operations Officer', 'sequence' => 2],
            ['dept_id' => 5, 'name' => 'Quartermaster', 'sequence' => 3],
            ['dept_id' => 5, 'name' => 'Boatswain', 'sequence' => 4],
            ['dept_id' => 5, 'name' => 'Transporter Specialist', 'sequence' => 5],

            ['dept_id' => 6, 'name' => 'Chief Engineering Officer', 'sequence' => 0],
            ['dept_id' => 6, 'name' => 'Assistant Chief Engineering Officer', 'sequence' => 1],
            ['dept_id' => 6, 'name' => 'Engineering Officer', 'sequence' => 2],
            ['dept_id' => 6, 'name' => 'Communications Specialist', 'sequence' => 3],
            ['dept_id' => 6, 'name' => 'Computer Systems Specialist', 'sequence' => 4],
            ['dept_id' => 6, 'name' => 'Damage Control Specialist', 'sequence' => 5],
            ['dept_id' => 6, 'name' => 'Matter/Energy Specialist', 'sequence' => 6],
            ['dept_id' => 6, 'name' => 'Propulsion Specialist', 'sequence' => 7],
            ['dept_id' => 6, 'name' => 'Structural/Environmental Specialist', 'sequence' => 8],
            ['dept_id' => 6, 'name' => 'Diagnostic Technician', 'sequence' => 9],

            ['dept_id' => 7, 'name' => 'Chief Science Officer', 'sequence' => 0],
            ['dept_id' => 7, 'name' => 'Assistant Chief Science Officer', 'sequence' => 1],
            ['dept_id' => 7, 'name' => 'Science Officer', 'sequence' => 2],
            ['dept_id' => 7, 'name' => 'Astrometrics Officer', 'sequence' => 3],
            ['dept_id' => 7, 'name' => 'Biologist', 'sequence' => 4],
            ['dept_id' => 7, 'name' => 'Alien Archaeologist/Anthropologist', 'sequence' => 5],
            ['dept_id' => 7, 'name' => 'Language Specialist', 'sequence' => 6],
            ['dept_id' => 7, 'name' => 'Stellar Cartographer', 'sequence' => 7],
            ['dept_id' => 7, 'name' => 'Botanist', 'sequence' => 8],

            ['dept_id' => 8, 'name' => 'Chief Medical Officer', 'sequence' => 0],
            ['dept_id' => 8, 'name' => 'Chief Counselor', 'sequence' => 1],
            ['dept_id' => 8, 'name' => 'Assistant Chief Medical Officer', 'sequence' => 2],
            ['dept_id' => 8, 'name' => 'Medical Officer', 'sequence' => 3],
            ['dept_id' => 8, 'name' => 'Surgeon', 'sequence' => 4],
            ['dept_id' => 8, 'name' => 'Counselor', 'sequence' => 5],
            ['dept_id' => 8, 'name' => 'Head Nurse', 'sequence' => 6],
            ['dept_id' => 8, 'name' => 'Nurse', 'sequence' => 7],
            ['dept_id' => 8, 'name' => 'Morale Officer', 'sequence' => 8],

            ['dept_id' => 9, 'name' => 'Chief Intelligence Officer', 'sequence' => 0],
            ['dept_id' => 9, 'name' => 'Assistant Chief Intelligence Officer', 'sequence' => 1],
            ['dept_id' => 9, 'name' => 'Intelligence Officer', 'sequence' => 2],
            ['dept_id' => 9, 'name' => 'Infiltration Specialist', 'sequence' => 3],
            ['dept_id' => 9, 'name' => 'Encryption Specialist', 'sequence' => 4],
            ['dept_id' => 9, 'name' => 'Information Specialist', 'sequence' => 5],

            ['dept_id' => 10, 'name' => 'Chief Diplomatic Officer', 'sequence' => 0],
            ['dept_id' => 10, 'name' => 'Assistant Chief Diplomatic Officer', 'sequence' => 1],
            ['dept_id' => 10, 'name' => 'Diplomatic Officer', 'sequence' => 2],
            ['dept_id' => 10, 'name' => 'Diplomatic Corpsman', 'sequence' => 3],
            ['dept_id' => 10, 'name' => 'Media Relations Officer', 'sequence' => 4],
            ['dept_id' => 10, 'name' => 'Translation Specialist', 'sequence' => 5],

            ['dept_id' => 11, 'name' => 'Marine Commanding Officer', 'sequence' => 0],
            ['dept_id' => 11, 'name' => 'Marine Executive Officer', 'sequence' => 1],
            ['dept_id' => 11, 'name' => 'Platoon Commander', 'sequence' => 2],
            ['dept_id' => 11, 'name' => 'Staff NCO', 'sequence' => 3],
            ['dept_id' => 11, 'name' => 'Marine', 'sequence' => 4],

            ['dept_id' => 12, 'name' => 'Group Commander', 'sequence' => 0],
            ['dept_id' => 12, 'name' => 'Wing Commander', 'sequence' => 1],
            ['dept_id' => 12, 'name' => 'Squadron Leader', 'sequence' => 2],
            ['dept_id' => 12, 'name' => 'Flight Leader', 'sequence' => 3],
            ['dept_id' => 12, 'name' => 'Fighter Pilot', 'sequence' => 4],
            ['dept_id' => 12, 'name' => 'Tactical Systems Operator', 'sequence' => 5],

            ['dept_id' => 13, 'name' => 'Mess Hall Manager', 'sequence' => 0],
            ['dept_id' => 13, 'name' => 'Lounge Manager', 'sequence' => 1],
            ['dept_id' => 13, 'name' => 'Chef', 'sequence' => 2],
            ['dept_id' => 13, 'name' => 'Teacher', 'sequence' => 3],

            ['dept_id' => 14, 'name' => 'Commander in Chief', 'sequence' => 0, 'admin' => 1],
            ['dept_id' => 14, 'name' => 'Deputy Commander in Chief', 'sequence' => 1, 'admin' => 1],

            ['dept_id' => 15, 'name' => 'Task Force 1 Commanding Officer', 'sequence' => 0, 'admin' => 1],
            ['dept_id' => 15, 'name' => 'Task Group 1-A Commanding Officer', 'sequence' => 1],
            ['dept_id' => 15, 'name' => 'Task Force 27 Commanding Officer', 'sequence' => 2, 'admin' => 1],
            ['dept_id' => 15, 'name' => 'Task Group 27-A Commanding Officer', 'sequence' => 3],
            ['dept_id' => 15, 'name' => 'Task Group 27-B Commanding Officer', 'sequence' => 4],
            ['dept_id' => 15, 'name' => 'Task Force 51 Commanding Officer', 'sequence' => 5, 'admin' => 1],
            ['dept_id' => 15, 'name' => 'Task Group 51-A Commanding Officer', 'sequence' => 6],
            ['dept_id' => 15, 'name' => 'Task Group 51-B Commanding Officer', 'sequence' => 7],

            ['dept_id' => 16, 'name' => 'Academy Commandant', 'sequence' => 0, 'admin' => 1],
            ['dept_id' => 16, 'name' => 'Deputy Academy Commandant', 'sequence' => 1],
            ['dept_id' => 16, 'name' => 'Instructor', 'sequence' => 2],

            ['dept_id' => 17, 'name' => 'Director of Personnel Management', 'sequence' => 0, 'admin' => 1],
            ['dept_id' => 17, 'name' => 'Deputy Director of Personnel Management', 'sequence' => 1],

            ['dept_id' => 18, 'name' => 'Research and Development Director', 'sequence' => 0, 'admin' => 1],
            ['dept_id' => 18, 'name' => 'Assistant Research and Development Director', 'sequence' => 1],

            ['dept_id' => 19, 'name' => 'Chief of Staff', 'sequence' => 0, 'admin' => 1],
            ['dept_id' => 19, 'name' => 'Fleet Communications Director', 'sequence' => 1],

            ['dept_id' => 20, 'name' => 'Judge Advocate General', 'sequence' => 0, 'admin' => 1],
            ['dept_id' => 20, 'name' => 'Deputy Judge Advocate General', 'sequence' => 1],
            ['dept_id' => 20, 'name' => 'Legal Officer', 'sequence' => 2],
        ];

        foreach ($positions as $position)
        {
            PositionModel::create($position);
        }
    }

}
