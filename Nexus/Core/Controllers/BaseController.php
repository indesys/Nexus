<?php namespace Nexus\Core\Controllers;

use View,
    MenuModel,
    Controller;

abstract class BaseController extends Controller {

    static protected $pageClass;
    protected $subnav;

    public function __construct()
    {
        // Fire the filters
        $this->beforeFilter('@filterSubnav');
        $this->beforeFilter('@filterViewVariables');
    }

    public function filterSubnav($route, $request)
    {
        View::share('menu_items', MenuModel::getItems(static::$pageClass));
    }

    public function filterViewVariables($route, $request)
    {
        View::share('page_class', static::$pageClass);
    }

}
