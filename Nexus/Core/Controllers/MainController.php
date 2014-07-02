<?php namespace Nexus\Core\Controllers;

use Controller,
    View,
    MessageModel,
    SettingModel,
    MenuModel,
    NewsModel;

class MainController extends Controller {

    public function index()
    {
        // Set the page class
        $page_class = 'main';
        
        // Get a listing of all the messages
        $messages = MessageModel::find(1);

        // Get a listing of all the globals
        $setting = SettingModel::find(1);

        // Query the database to set the subnavigation menu
        $menu_items = MenuModel::where('pg_class','=',$page_class)
                                ->where('active','=','1')
                                ->orderBy('sequence','ASC')
                                ->get();

        // Make the View
        return View::make('pages.main.index')
            ->with('page_class', $page_class)
            ->with('messages', $messages)
            ->with('setting', $setting)
            ->with('menu_items', $menu_items);
    }

    public function about_us()
    {
        // Set the page class
        $page_class = 'main';
        
        // Get a listing of all the messages
        $messages = MessageModel::find(1);

        // Get a listing of all the globals
        $setting = SettingModel::find(1);

        // Query the database to set the subnavigation menu
        $menu_items = MenuModel::where('pg_class','=',$page_class)
                                ->where('active','=','1')
                                ->orderBy('sequence','ASC')
                                ->get();

        // Make the View
        return View::make('pages.main.about_us')
            ->with('page_class', $page_class)
            ->with('messages', $messages)
            ->with('setting', $setting)
            ->with('menu_items', $menu_items);
    }

    public function news()
    {
        // Set the page class
        $page_class = 'main';
        
        // Get a listing of all the messages
        $news_items = NewsModel::where('activated','=','1')
                                ->join('news_categories', 'news.category_id', '=', 'news_categories.id')
                                ->take(10)
                                ->orderBy('news.created_at','DESC')
                                ->get();

        // Query the database to set the subnavigation menu
        $menu_items = MenuModel::where('pg_class','=',$page_class)
                                ->where('active','=','1')
                                ->orderBy('sequence','ASC')
                                ->get();

        // Make the View
        return View::make('pages.main.news')
            ->with('page_class', $page_class)
            ->with('news_items', $news_items)
            ->with('menu_items', $menu_items);
    }

    public function faqs()
    {
        // Set the page class
        $page_class = 'main';
        
        // Get a listing of all the messages
        $messages = MessageModel::find(1);

        // Query the database to set the subnavigation menu
        $menu_items = MenuModel::where('pg_class','=',$page_class)
                                ->where('active','=','1')
                                ->orderBy('sequence','ASC')
                                ->get();

        // Make the View
        return View::make('pages.main.faqs')
            ->with('page_class', $page_class)
            ->with('messages', $messages)
            ->with('menu_items', $menu_items);
    }

    public function credits()
    {
        // Set the page class
        $page_class = 'main';
        
        // Get a listing of all the messages
        $messages = MessageModel::find(1);

        // Query the database to set the subnavigation menu
        $menu_items = MenuModel::where('pg_class','=',$page_class)
                                ->where('active','=','1')
                                ->orderBy('sequence','ASC')
                                ->get();

        // Make the View
        return View::make('pages.main.credits')
            ->with('page_class', $page_class)
            ->with('messages', $messages)
            ->with('menu_items', $menu_items);
    }

}