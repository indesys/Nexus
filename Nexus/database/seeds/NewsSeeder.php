<?php

class NewsSeeder extends Seeder {

    public function run()
    {
        $news = [
            ['category_id' => 1, 'title' => 'Deneb Shipyards', 'content' => 'Mothball Shipyards created.', 'posted' => '2014-01-01 09:00:00', 'activated' => 1],
            ['category_id' => 1, 'title' => 'Inactive News', 'content' => 'Non-activated item.', 'posted' => '2014-03-11 10:17:00', 'activated' => 0],
            ['category_id' => 1, 'title' => 'Happy Birthday to the Fleet', 'content' => 'The Fleet was created one year ago today!', 'posted' => '2014-06-18 20:38:00', 'activated' => 1],
        ];

        foreach ($news as $news)
        {
            NewsModel::create($news);
        }
    }

}
