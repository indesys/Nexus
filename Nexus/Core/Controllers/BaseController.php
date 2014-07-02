<?php namespace Nexus\Core\Controllers;

use View,
    MenuModel,
    Controller;

abstract class BaseController extends Controller {

    protected $pageClass;
    protected $subnav;

    public function __construct()
    {
        //
    }

}
