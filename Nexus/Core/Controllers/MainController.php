<?php namespace Nexus\Core\Controllers;

use BaseController,
    View,
    MessageModel,
    SettingModel,
    MenuModel,
    NewsModel;

class MainController extends BaseController {

    public function __construct()
    {
        parent::__construct();

        // Set the page class
        static::$pageClass = "main";
    }

    public function index()
    {
        // Get a listing of all the messages
        $messages = MessageModel::find(1);

        // Get a listing of all the globals
        $setting = SettingModel::find(1);

        // Make the View
        return View::make('pages.main.index')
            ->with('messages', $messages)
            ->with('setting', $setting);
    }

    public function about()
    {
        // Get a listing of all the messages
        $messages = MessageModel::find(1);

        // Get a listing of all the globals
        $setting = SettingModel::find(1);

        // Make the View
        return View::make('pages.main.about_us')
            ->with('messages', $messages)
            ->with('setting', $setting);
    }

    public function news()
    {
        // Get a listing of all the messages
        $news_items = NewsModel::where('activated','=','1')
            ->join('news_categories', 'news.category_id', '=', 'news_categories.id')
            ->take(10)
            ->orderBy('news.posted','DESC')
            ->get();

        // Make the View
        return View::make('pages.main.news')
            ->with('news_items', $news_items);
    }

    public function faqs()
    {
        // Get a listing of all the messages
        $messages = MessageModel::find(1);

        // Make the View
        return View::make('pages.main.faqs')
            ->with('messages', $messages);
    }

    public function credits()
    {
        // Get a listing of all the messages
        $messages = MessageModel::find(1);

        // Make the View
        return View::make('pages.main.credits')
            ->with('messages', $messages);
    }

    public function contact()
    {
        # code...
    }

    public function join()
    {
        # code...
    }

    public function components()
    {
        return View::make('pages.Main.components');
    }

}
