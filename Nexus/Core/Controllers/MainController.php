<?php namespace Nexus\Core\Controllers;

use View;

class MainController extends \Controller {

    public function index()
    {
        $page_class = 'main';
        /*
        // Get a listing of all the messages
        $messages = MessagesModel::find(1);

        // Get a listing of all the globals
        $setting = SettingsModel::find(1);

        // Query the database to set the subnavigation menu
        $menu_items = MenuModel::where('submenu_class','=',$page_class)
                                ->where('submenu_active','=','1')
                                ->orderBy('submenu_order','ASC')
                                ->get();*/

        //return View::make('pages.main.index', compact('messages', 'setting', 'menu_items', 'page_class'));
        return View::make('pages.main.index');
    }

}
