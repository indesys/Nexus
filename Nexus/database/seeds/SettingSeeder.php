<?php

class SettingSeeder extends Seeder {

    public function run()
    {
        $settings = [
			['site_title' => 'Nexus Fleet Management', 'fleet_name' => 'Nexus Fleet', 'admin_email' => 'fleet.admin@nexusfleet.net',],
        ];

        foreach ($settings as $setting)
        {
            SettingModel::create($setting);
        }
    }

}
