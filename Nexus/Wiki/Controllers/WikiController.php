<?php namespace Nexus\Wiki\Controllers ;

use BaseController,
	View,
	MenuModel,
	SettingModel;

class WikiController extends BaseController {

    public function __construct()
    {
        parent::__construct();

        // Set the page class
        static::$pageClass = "wiki";
    }
	
	public function index()
    {
		// Get a listing of all the globals
		$setting = SettingModel::find(1);
		
		return View::make('pages.wiki.index')
			->with('setting',$setting);
    }

}

?>