<?php namespace Nexus\Core\Controllers ;

use Controller,
	View,
	Request,
	DB,
	MenuModel,
	MessageModel,
	SettingModel,
	TaskForceModel,
	PositionModel,
	ShipModel,
	DepartmentModel;

class FleetController extends Controller {
	
	public function index()
    {
		$page_class = 'fleet';
		
        // Query the database to set the subnavigation menu
        $menu_items = MenuModel::where('pg_class','=',$page_class)
                                ->where('active','=','1')
                                ->orderBy('sequence','ASC')
                                ->get();
		
		// Make the View
		return View::make('pages.fleet.index')
			->with('menu_items',$menu_items)
			->with('page_class',$page_class);
    }
	
	public function ship_listing()
    {
		$page_class = 'fleet';

        // Query the database to set the subnavigation menu
        $menu_items = MenuModel::where('pg_class','=',$page_class)
                                ->where('active','=','1')
                                ->orderBy('sequence','ASC')
                                ->get();
        // Retrieve all the task forces minus the surplus depot holding bay
		$task_forces = TaskForceModel::where('name','!=','Task Force 99')
								->orderBy('name','ASC')
								->get();
		
		// Make the View
		return View::make('pages.fleet.ship_listing')
			->with('task_forces',$task_forces)
			->with('menu_items',$menu_items)
			->with('page_class',$page_class);
    }
	
	public function tf_ships($id)
    {
		$page_class = 'fleet';

		if (is_numeric(Request::segment(3))) {
			$id = Request::segment(3);
		} else {
			$id = FALSE;
		}

        // Query the database to set the subnavigation menu
        $menu_items = MenuModel::where('pg_class','=',$page_class)
                                ->where('active','=','1')
                                ->orderBy('sequence','ASC')
                                ->get();
		$tf = TaskForceModel::where('id','=',$id)->first(); // Using first to make sure we only have one record

		// Make the View
		return View::make('pages.fleet.tf_ships')
			->with('id',$id)
			->with('tf',$tf)
			->with('menu_items',$menu_items)
			->with('page_class',$page_class);
    }
	
	public function departments()
    {
		$page_class = 'fleet';

        // Query the database to set the subnavigation menu
        $menu_items = MenuModel::where('pg_class','=',$page_class)
                                ->where('active','=','1')
                                ->orderBy('sequence','ASC')
                                ->get();
        // Retrieve all the details of the fleet departments
		$departments = DepartmentModel::where('admin','=','1')
								->orderBy('sequence', 'ASC')
								->get();
		
		return View::make('pages.fleet.departments')
			->with('departments',$departments)
			->with('menu_items',$menu_items)
			->with('page_class',$page_class);
    }
	
	public function command_staff()
    {
		$page_class = 'fleet';

        // Query the database to set the subnavigation menu
        $menu_items = MenuModel::where('pg_class','=',$page_class)
                                ->where('active','=','1')
                                ->orderBy('sequence','ASC')
                                ->get();
        // Retrieve all the details of the fleet departments
		$departments = DepartmentModel::where('dept_is_council','=','1')->orderBy('dept_order', 'ASC')->get();
		
		return View::make('pages.fleet.command_staff')
			->with('departments',$departments)
			->with('menu_items',$menu_items)
			->with('page_class',$page_class);
    }
	
	public function rules()
    {
		$page_class = 'fleet';

        // Query the database to set the subnavigation menu
        $menu_items = MenuModel::where('pg_class','=',$page_class)
                                ->where('active','=','1')
                                ->orderBy('sequence','ASC')
                                ->get();
        // Query the database to retrieve the fleet rules
		$rules = MessageModel::find(1);
		
		return View::make('pages.fleet.rules')
			->with('rules',$rules)
			->with('menu_items',$menu_items)
			->with('page_class',$page_class);
    }
	
	public function task_forces()
    {
		$page_class = 'fleet';

        // Query the database to set the subnavigation menu
        $menu_items = MenuModel::where('pg_class','=',$page_class)
                                ->where('active','=','1')
                                ->orderBy('sequence','ASC')
                                ->get();
        // Retrieve all the task forces minus the surplus depot holding bay
		$task_forces = TaskForceModel::where('name','!=','Task Force 99')
								->orderBy('name','ASC')
								->get();
		
		return View::make('pages.fleet.task_forces')
			->with('task_forces',$task_forces)
			->with('menu_items',$menu_items)
			->with('page_class',$page_class);
    }

}

?>