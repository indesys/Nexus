<?php namespace Nexus\Core\Controllers;

use BaseController,
	View,
	Request,
	MessageModel,
	TaskForceModel,
	DepartmentModel,
	PositionModel;

class FleetController extends BaseController {

	public function __construct()
	{
		parent::__construct();

		// Set the page class
		static::$pageClass = "fleet";
	}

	public function index()
    {
		return View::make('pages.fleet.index');
    }

	public function tf_ships($id)
    {
		if (is_numeric(Request::segment(3))) {
			$id = Request::segment(3);
		} else {
			$id = FALSE;
		}

		$tf = TaskForceModel::where('id','=',$id)->first(); // Using first to make sure we only have one record

		// Make the View
		return View::make('pages.fleet.tf_ships')
			->with('id',$id)
			->with('tf',$tf);
    }

	public function departments()
    {
		// Retrieve all the details of the fleet departments
		$departments = DepartmentModel::where('admin','=','1')
			->orderBy('sequence', 'ASC')
			->get();

		return View::make('pages.fleet.departments')
			->with('departments',$departments);
    }

	public function command_staff()
    {
		// Retrieve all the details of the fleet departments
		$departments = DepartmentModel::admin()
			->orderBy('sequence', 'asc')
			->get();

		return View::make('pages.fleet.command_staff')
			->with('departments', $departments);
    }

	public function rules()
    {
		// Query the database to retrieve the fleet rules
		$rules = MessageModel::find(1);

		return View::make('pages.fleet.rules')
			->with('rules',$rules);
    }

	public function task_forces()
    {
		// Retrieve all the task forces minus the surplus depot holding bay
		$task_forces = TaskForceModel::where('name','!=','Task Force 99')
			->orderBy('name','ASC')
			->get();

		return View::make('pages.fleet.task_forces')
			->with('task_forces',$task_forces);
    }

	public function opl()
    {
		// Retrieve all the task forces minus the surplus depot holding bay
		$positions = PositionModel::where('admin','!=','1')
			->orderBy('name','ASC')
			->get();

		return View::make('pages.fleet.opl')
			->with('positions',$positions);
    }

}

?>
