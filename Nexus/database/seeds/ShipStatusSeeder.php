<?php

class ShipStatusSeeder extends Seeder {

    public function run()
    {
        $status = [
            ['name' => 'Waiting for Commanding Officer'],
            ['name' => 'Restricted Operations'],
            ['name' => 'Operational'],
        ];

        foreach ($status as $status)
        {
            ShipStatusModel::create($status);
        }
    }

}
