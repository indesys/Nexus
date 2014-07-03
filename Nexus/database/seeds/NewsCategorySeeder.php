<?php

class NewsCategorySeeder extends Seeder {

    public function run()
    {
        $categories = [
            ['name' => 'Site News'],
            ['name' => 'Fleet News'],
            ['name' => 'Task Force 1 News'],
            ['name' => 'Task Force 27 News'],
            ['name' => 'Task Force 51 News'],
        ];

        foreach ($categories as $cat)
        {
            NewsCategoryModel::create($cat);
        }
    }

}
