<?php namespace Lambda\Core\Controllers ;

use Controller,
	View,
	Request,
	DB,
	MenuModel,
	TaskForcesModel,
	CommandStaffModel,
	PositionsModel,
	ShipsModel,
	DepartmentsModel,
	MessagesModel,
	SettingsModel;

class FleetController extends Controller {
	
	public function index()
    {
		$page_class = 'fleet';
		
        // Query the database to set the subnavigation menu
		$menu_items = MenuModel::where('submenu_class','=',$page_class)
								->where('submenu_active','=','1')
								->orderBy('submenu_order','ASC')
								->get();
		
		return View::make('lambda_fleet_index',compact('menu_items','page_class'));
    }
	
	public function ship_listing()
    {
		$page_class = 'fleet';

		// Query the database to set the subnavigation menu
		$menu_items = MenuModel::where('submenu_class','=',$page_class)
								->where('submenu_active','=','1')
								->orderBy('submenu_order','ASC')
								->get();
        // Retrieve all the task forces minus the surplus depot holding bay
		$task_forces = TaskForcesModel::where('tf_number','!=','99')
								->orderBy('tf_number','ASC')
								->get();
		
		return View::make('lambda_fleet_ship_listing',compact('task_forces','menu_items','page_class'));
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
		$menu_items = MenuModel::where('submenu_class','=',$page_class)
								->where('submenu_active','=','1')
								->orderBy('submenu_order','ASC')
								->get();
		$tf = TaskForcesModel::where('tf_id','=',$id)->first(); // Using first to make sure we only have one record

		return View::make('lambda_fleet_tf_ships',compact('id','tf','menu_items','page_class'));
    }
	
	public function departments()
    {
		$page_class = 'fleet';
		
        // Query the database to set the subnavigation menu
		$menu_items = MenuModel::where('submenu_class','=',$page_class)
								->where('submenu_active','=','1')
								->orderBy('submenu_order','ASC')
								->get();
        // Retrieve all the details of the fleet departments
		$departments = DepartmentsModel::where('dept_is_council','=','1')
								->orderBy('dept_order', 'ASC')
								->get();
		
		return View::make('lambda_fleet_departments',compact('departments','menu_items','page_class'));
    }
	
	public function command()
    {
		$page_class = 'fleet';
		
        // Query the database to set the subnavigation menu
		$menu_items = MenuModel::where('submenu_class','=',$page_class)
								->where('submenu_active','=','1')
								->orderBy('submenu_order','ASC')
								->get();
        // Retrieve all the details of the fleet departments
		$departments = DepartmentsModel::where('dept_is_council','=','1')->orderBy('dept_order', 'ASC')->get();
        // Retrieve all the details of the fleet departments
		//$positions = PositionsModel::all();
		
		return View::make('lambda_fleet_command_staff',compact('departments','menu_items','page_class'));
    }
	
	public function rules()
    {
		$page_class = 'fleet';
		
        // Query the database to set the subnavigation menu
		$menu_items = MenuModel::where('submenu_class','=',$page_class)
								->where('submenu_active','=','1')
								->orderBy('submenu_order','ASC')
								->get();
        // Query the database to retrieve the fleet rules
		$rules = MessagesModel::find(1);
		
		return View::make('lambda_fleet_rules',compact('rules','menu_items','page_class'));
    }
	
	public function task_forces()
    {
		$page_class = 'fleet';
		
        // Query the database to set the subnavigation menu
		$menu_items = MenuModel::where('submenu_class','=',$page_class)
								->where('submenu_active','=','1')
								->orderBy('submenu_order','ASC')
								->get();
        // Retrieve all the task forces minus the surplus depot holding bay
		$task_forces = TaskForcesModel::where('tf_number','!=','99')
								->orderBy('tf_number','ASC')
								->get();
		
		return View::make('lambda_fleet_task_forces',compact('task_forces','menu_items','page_class'));
    }

}

?>