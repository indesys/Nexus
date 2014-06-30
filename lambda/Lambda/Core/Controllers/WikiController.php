<?php namespace Lambda\Core\Controllers ;

use Controller,
	View,
	MenuModel,
	MessagesModel,
	SettingsModel;

class WikiController extends Controller {
	
	public function index()
    {
		$page_class = 'wiki';
		
        // Get a listing of all the globals
		$setting = SettingsModel::find(1);
        // Query the database to set the subnavigation menu
		$menu_items = MenuModel::where('submenu_class','=',$page_class)
								->where('submenu_active','=','1')
								->orderBy('submenu_order','ASC')
								->get();
		
		return View::make('lambda_wiki_index',compact('setting','menu_items','page_class'));
    }

}

?>