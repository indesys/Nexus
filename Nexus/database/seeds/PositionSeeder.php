<?php

class PositionSeeder extends Seeder {

    public function run()
    {
        $positions = [
            ['dept_id' => 1, 'name' => 'Commanding Officer', 'pos_order' => 0],
            ['dept_id' => 1, 'name' => 'Executive Officer', 'pos_order' => 1],
            ['dept_id' => 1, 'name' => 'Second Officer', 'pos_order' => 2],
            ['dept_id' => 1, 'name' => 'Chief of the Boat', 'pos_order' => 3],
            ['dept_id' => 1, 'name' => 'Mission Adviser', 'pos_order' => 4],
            ['dept_id' => 1, 'name' => 'Yeoman', 'pos_order' => 5],

            ['dept_id' => 2, 'name' => 'Chief Flight Control Officer', 'pos_order' => 0],
            ['dept_id' => 2, 'name' => 'Assistant Chief Flight Control Officer', 'pos_order' => 1],
            ['dept_id' => 2, 'name' => 'Flight Control Officer', 'pos_order' => 2],
            ['dept_id' => 2, 'name' => 'Shuttle Bay Manager', 'pos_order' => 3],
            ['dept_id' => 2, 'name' => 'Chief Support Craft Pilot', 'pos_order' => 4],

            ['dept_id' => 3, 'name' => 'Chief Strategic Operations Officer', 'pos_order' => 0],
            ['dept_id' => 3, 'name' => 'Assistant Chief Strategic Operations Officer', 'pos_order' => 1],
            ['dept_id' => 3, 'name' => 'Strategic Operations Officer', 'pos_order' => 2],

            ['dept_id' => 4, 'name' => 'Chief Security/Tactical Officer', 'pos_order' => 0],
            ['dept_id' => 4, 'name' => 'Assistant Chief Security/Tactical Officer', 'pos_order' => 1],
            ['dept_id' => 4, 'name' => 'Security Officer', 'pos_order' => 2],
            ['dept_id' => 4, 'name' => 'Tactical Officer', 'pos_order' => 3],
            ['dept_id' => 4, 'name' => 'Security Investigations Officer', 'pos_order' => 4],
            ['dept_id' => 4, 'name' => 'Brig Officer', 'pos_order' => 5],
            ['dept_id' => 4, 'name' => 'Master-At-Arms', 'pos_order' => 6],

            ['dept_id' => 5, 'name' => 'Chief Operations Officer', 'pos_order' => 0],
            ['dept_id' => 5, 'name' => 'Assistant Chief Operations Officer', 'pos_order' => 1],
            ['dept_id' => 5, 'name' => 'Operations Officer', 'pos_order' => 2],
            ['dept_id' => 5, 'name' => 'Quartermaster', 'pos_order' => 3],
            ['dept_id' => 5, 'name' => 'Boatswain', 'pos_order' => 4],
            ['dept_id' => 5, 'name' => 'Transporter Specialist', 'pos_order' => 5],

            ['dept_id' => 6, 'name' => 'Chief Engineering Officer', 'pos_order' => 0],
            ['dept_id' => 6, 'name' => 'Assistant Chief Engineering Officer', 'pos_order' => 1],
            ['dept_id' => 6, 'name' => 'Engineering Officer', 'pos_order' => 2],
            ['dept_id' => 6, 'name' => 'Communications Specialist', 'pos_order' => 3],
            ['dept_id' => 6, 'name' => 'Computer Systems Specialist', 'pos_order' => 4],
            ['dept_id' => 6, 'name' => 'Damage Control Specialist', 'pos_order' => 5],
            ['dept_id' => 6, 'name' => 'Matter/Energy Specialist', 'pos_order' => 6],
            ['dept_id' => 6, 'name' => 'Propulsion Specialist', 'pos_order' => 7],
            ['dept_id' => 6, 'name' => 'Structural/Environmental Specialist', 'pos_order' => 8],
            ['dept_id' => 6, 'name' => 'Diagnostic Technician', 'pos_order' => 9],

            ['dept_id' => 7, 'name' => 'Chief Science Officer', 'pos_order' => 0],
            ['dept_id' => 7, 'name' => 'Assistant Chief Science Officer', 'pos_order' => 1],
            ['dept_id' => 7, 'name' => 'Science Officer', 'pos_order' => 2],
            ['dept_id' => 7, 'name' => 'Astrometrics Officer', 'pos_order' => 3],
            ['dept_id' => 7, 'name' => 'Biologist', 'pos_order' => 4],
            ['dept_id' => 7, 'name' => 'Alien Archaeologist/Anthropologist', 'pos_order' => 5],
            ['dept_id' => 7, 'name' => 'Language Specialist', 'pos_order' => 6],
            ['dept_id' => 7, 'name' => 'Stellar Cartographer', 'pos_order' => 7],
            ['dept_id' => 7, 'name' => 'Botanist', 'pos_order' => 8],

            ['dept_id' => 8, 'name' => 'Chief Medical Officer', 'pos_order' => 0],
            ['dept_id' => 8, 'name' => 'Chief Counsellor', 'pos_order' => 1],
            ['dept_id' => 8, 'name' => 'Assistant Chief Medical Officer', 'pos_order' => 2],
            ['dept_id' => 8, 'name' => 'Medical Officer', 'pos_order' => 3],
            ['dept_id' => 8, 'name' => 'Surgeon', 'pos_order' => 4],
            ['dept_id' => 8, 'name' => 'Counsellor', 'pos_order' => 5],
            ['dept_id' => 8, 'name' => 'Head Nurse', 'pos_order' => 6],
            ['dept_id' => 8, 'name' => 'Nurse', 'pos_order' => 7],
            ['dept_id' => 8, 'name' => 'Morale Officer', 'pos_order' => 8],

            ['dept_id' => 9, 'name' => 'Chief Intelligence Officer', 'pos_order' => 0],
            ['dept_id' => 9, 'name' => 'Assistant Chief Intelligence Officer', 'pos_order' => 1],
            ['dept_id' => 9, 'name' => 'Intelligence Officer', 'pos_order' => 2],
            ['dept_id' => 9, 'name' => 'Infiltration Specialist', 'pos_order' => 3],
            ['dept_id' => 9, 'name' => 'Encryption Specialist', 'pos_order' => 4],
            ['dept_id' => 9, 'name' => 'Information Specialist', 'pos_order' => 5],

            ['dept_id' => 10, 'name' => 'Chief Diplomatic Officer', 'pos_order' => 0],
            ['dept_id' => 10, 'name' => 'Assistant Chief Diplomatic Officer', 'pos_order' => 1],
            ['dept_id' => 10, 'name' => 'Diplomatic Officer', 'pos_order' => 2],
            ['dept_id' => 10, 'name' => 'Diplomatic Corpsman', 'pos_order' => 3],
            ['dept_id' => 10, 'name' => 'Media Relations Officer', 'pos_order' => 4],
            ['dept_id' => 10, 'name' => 'Translation Specialist', 'pos_order' => 5],

            ['dept_id' => 11, 'name' => 'Marine Commanding Officer', 'pos_order' => 0],
            ['dept_id' => 11, 'name' => 'Marine Executive Officer', 'pos_order' => 1],
            ['dept_id' => 11, 'name' => 'Platoon Commander', 'pos_order' => 2],
            ['dept_id' => 11, 'name' => 'Staff NCO', 'pos_order' => 3],
            ['dept_id' => 11, 'name' => 'Marine', 'pos_order' => 4],

            ['dept_id' => 12, 'name' => 'Group Commander', 'pos_order' => 0],
            ['dept_id' => 12, 'name' => 'Wing Commander', 'pos_order' => 1],
            ['dept_id' => 12, 'name' => 'Squadron Leader', 'pos_order' => 2],
            ['dept_id' => 12, 'name' => 'Flight Leader', 'pos_order' => 3],
            ['dept_id' => 12, 'name' => 'Fighter Pilot', 'pos_order' => 4],
            ['dept_id' => 12, 'name' => 'Tactical Systems Operator', 'pos_order' => 5],

            ['dept_id' => 13, 'name' => 'Mess Hall Manager', 'pos_order' => 0],
            ['dept_id' => 13, 'name' => 'Lounge Manager', 'pos_order' => 1],
            ['dept_id' => 13, 'name' => 'Chef', 'pos_order' => 2],
            ['dept_id' => 13, 'name' => 'Teacher', 'pos_order' => 3],

            ['dept_id' => 14, 'name' => 'Commander in Chief', 'pos_order' => 0],
            ['dept_id' => 14, 'name' => 'Deputy Commander in Chief', 'pos_order' => 1],

            ['dept_id' => 15, 'name' => 'Task Force 1 Commanding Officer', 'pos_order' => 0],
            ['dept_id' => 15, 'name' => 'Task Group 1-A Commanding Officer', 'pos_order' => 1],
            ['dept_id' => 15, 'name' => 'Task Force 27 Commanding Officer', 'pos_order' => 2],
            ['dept_id' => 15, 'name' => 'Task Group 27-A Commanding Officer', 'pos_order' => 3],
            ['dept_id' => 15, 'name' => 'Task Group 27-B Commanding Officer', 'pos_order' => 4],
            ['dept_id' => 15, 'name' => 'Task Force 51 Commanding Officer', 'pos_order' => 5],
            ['dept_id' => 15, 'name' => 'Task Group 51-A Commanding Officer', 'pos_order' => 6],
            ['dept_id' => 15, 'name' => 'Task Group 51-B Commanding Officer', 'pos_order' => 7],

            ['dept_id' => 16, 'name' => 'Academy Commandant', 'pos_order' => 0],
            ['dept_id' => 16, 'name' => 'Deputy Academy Commandant', 'pos_order' => 1],
            ['dept_id' => 16, 'name' => 'Instructor', 'pos_order' => 2],

            ['dept_id' => 17, 'name' => 'Director of Personnel Management', 'pos_order' => 0],
            ['dept_id' => 17, 'name' => 'Deputy Director of Personnel Management', 'pos_order' => 1],

            ['dept_id' => 18, 'name' => 'Research and Development Director', 'pos_order' => 0],
            ['dept_id' => 18, 'name' => 'Assistant Research and Development Director', 'pos_order' => 1],

            ['dept_id' => 19, 'name' => 'Chief of Staff', 'pos_order' => 0],
            ['dept_id' => 19, 'name' => 'Fleet Communications Director', 'pos_order' => 1],

            ['dept_id' => 10, 'name' => 'Judge Advocate General', 'pos_order' => 0],
            ['dept_id' => 10, 'name' => 'Deputy Judge Advocate General', 'pos_order' => 1],
            ['dept_id' => 10, 'name' => 'Legal Officer', 'pos_order' => 2],
        ];

        foreach ($positions as $position)
        {
            PositionModel::create($position);
        }
    }

}
