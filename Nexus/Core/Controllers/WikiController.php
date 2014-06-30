<?php namespace Nexus\Wiki\Controllers ;

use Controller,
	View,
	MenuModel,
	SettingModel;

class WikiController extends Controller {
	
	public function index()
    {
		$page_class = 'wiki';
		
        // Get a listing of all the globals
		$setting = SettingModel::find(1);
        // Query the database to set the subnavigation menu
		$menu_items = MenuModel::where('submenu_class','=',$page_class)
								->where('submenu_active','=','1')
								->orderBy('submenu_order','ASC')
								->get();
		
		return View::make('pages.wiki.index')
			->with('setting',$setting)
			->with('menu_items',$menu_items)
			->with('page_class',$page_class);
    }

}

?>