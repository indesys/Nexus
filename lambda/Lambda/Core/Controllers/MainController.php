<?php namespace Lambda\Core\Controllers ;

use Controller,
	View,
	MenuModel,
	MessagesModel,
	NewsModel,
	SettingsModel;

class MainController extends Controller {
	
	public function index()
    {
		$page_class = 'main';
		
        // Get a listing of all the messages
		$messages = MessagesModel::find(1);
        // Get a listing of all the globals
		$setting = SettingsModel::find(1);
        // Query the database to set the subnavigation menu
		$menu_items = MenuModel::where('submenu_class','=',$page_class)
								->where('submenu_active','=','1')
								->orderBy('submenu_order','ASC')
								->get();
		
		return View::make('lambda_home',compact('messages','setting','menu_items','page_class'));
    }

    public function news()
    {
		$page_class = 'main';
		
        // Get a listing of all news items
		$news_items = NewsModel::where('news_active','=','1')
								->join('news_cats', 'news.news_category', '=', 'news_cats.news_cat_id')
								->orderBy('news_posted','DESC')
								->get();
        // Query the database to set the subnavigation menu
		$menu_items = MenuModel::where('submenu_class','=',$page_class)
								->where('submenu_active','=','1')
								->orderBy('submenu_order','ASC')
								->get();
		
        return View::make('lambda_news',compact('news_items','menu_items','page_class'));
    }

    public function about_us()
    {
		$page_class = 'main';
		
        // Get a listing of all the messages
		$messages = MessagesModel::find(1);
        // Get a listing of all the globals
		$setting = SettingsModel::find(1);
        // Query the database to set the subnavigation menu
		$menu_items = MenuModel::where('submenu_class','=',$page_class)
								->where('submenu_active','=','1')
								->orderBy('submenu_order','ASC')
								->get();
		
        return View::make('lambda_about_us',compact('messages','setting','menu_items','page_class'));
    }

    public function faqs()
    {
		$page_class = 'main';
		
        // Get a listing of all the messages
		$messages = MessagesModel::find(1);
        // Query the database to set the subnavigation menu
		$menu_items = MenuModel::where('submenu_class','=',$page_class)
								->where('submenu_active','=','1')
								->orderBy('submenu_order','ASC')
								->get();
		
        return View::make('lambda_faqs',compact('messages','menu_items','page_class'));
    }

    public function credits()
    {
		$page_class = 'main';
		
        // Get a listing of all the messages
		$messages = MessagesModel::find(1);
        // Query the database to set the subnavigation menu
		$menu_items = MenuModel::where('submenu_class','=',$page_class)
								->where('submenu_active','=','1')
								->orderBy('submenu_order','ASC')
								->get();
		
        return View::make('lambda_credits',compact('messages','menu_items','page_class'));
    }

}

?>