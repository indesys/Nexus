<?php

class ShipClassSeeder extends Seeder {

    public function run()
    {
        $classes = [
            ['name' => 'Stardock'],
            ['name' => 'Regula'],
            ['name' => 'Sovereign'],
            ['name' => 'Galaxy'],
            ['name' => 'Ambassador'],
            ['name' => 'Excelsior'],
            ['name' => 'Nova'],
            ['name' => 'Norway'],
            ['name' => 'Akira'],
            ['name' => 'Defiant'],
            ['name' => 'Nebula'],
            ['name' => 'Prometheus'],

            ['name' => 'Vorcha'],
            ['name' => 'Valdore'],
            ['name' => 'Galor'],
        ];

        foreach ($classes as $class)
        {
            SpecClassShipModel::create($class);
        }
    }

}
