<?php

class MenuSeeder extends Seeder {

    public function run()
    {
        $menus = [
            ['text' => 'About Us', 'url' => 'main/about_us', 'pg_class' => 'main', 'sequence' => 0, 'active' => 1],
            ['text' => 'Join Us', 'url' => 'main/join_us', 'pg_class' => 'main', 'sequence' => 1, 'active' => 1],
            ['text' => 'Contact Us', 'url' => 'main/contact_us', 'pg_class' => 'main', 'sequence' => 2, 'active' => 1],
            ['text' => 'Fleet News Service', 'url' => 'main/news', 'pg_class' => 'main', 'sequence' => 3, 'active' => 1],
            ['text' => 'Forums', 'url' => 'http://forums.nexusfleet.net/', 'pg_class' => 'main', 'sequence' => 4, 'active' => 0],
            ['text' => 'FAQs', 'url' => 'main/faqs', 'pg_class' => 'main', 'sequence' => 5, 'active' => 1],

            ['text' => 'Ship Listing', 'url' => 'fleet/ship_listing', 'pg_class' => 'fleet', 'sequence' => 0, 'active' => 1],
            ['text' => 'Task Forces', 'url' => 'fleet/task_forces', 'pg_class' => 'fleet', 'sequence' => 1, 'active' => 1],
            ['text' => 'Fleet Departments', 'url' => 'fleet/departments', 'pg_class' => 'fleet', 'sequence' => 2, 'active' => 1],
            ['text' => 'Fleet Rules', 'url' => 'fleet/rules', 'pg_class' => 'fleet', 'sequence' => 3, 'active' => 1],
            ['text' => 'Command Staff', 'url' => 'fleet/command_staff', 'pg_class' => 'fleet', 'sequence' => 4, 'active' => 1],
            ['text' => 'Open Positions', 'url' => 'fleet/open_positions', 'pg_class' => 'fleet', 'sequence' => 5, 'active' => 1],

            ['text' => 'Ship Database', 'url' => 'wiki/ship_database', 'pg_class' => 'wiki', 'sequence' => 0, 'active' => 1],
            ['text' => 'Fleet Database', 'url' => 'wiki/fleet_database', 'pg_class' => 'wiki', 'sequence' => 1, 'active' => 1],
            ['text' => 'Nexus Fleet Wiki', 'url' => 'http://wiki.nexusfleet.net/', 'pg_class' => 'wiki', 'sequence' => 2, 'active' => 1],
        ];

        foreach ($menus as $menu)
        {
            MenuModel::create($menu);
        }
    }

}
