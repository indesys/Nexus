<?php

class DatabaseSeeder extends Seeder {

    public function run()
    {
        Eloquent::unguard();

        $this->call('MessageSeeder');
        $this->call('SettingSeeder');
        $this->call('MenuSeeder');

        $this->call('DepartmentSeeder');
        $this->call('PositionSeeder');
        $this->call('RankSeeder');
        $this->call('UserSeeder');
        $this->call('CharacterSeeder');

        $this->call('TaskForceSeeder');
        $this->call('TaskGroupSeeder');
        $this->call('ShipSeeder');
        $this->call('ShipClassSeeder');
    }

}
