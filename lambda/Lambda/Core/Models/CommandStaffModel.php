<?php namespace Lambda\Core\Models ;

use Eloquent ;

class CommandStaffModel extends Eloquent
{
	protected $primaryKey = 'staff_id' ;
	protected $table = 'command_staff' ;
	protected $fillable = ['staff_department', 'staff_position', 'staff_task_force', 'staff_task_group', 'staff_char_id', 'staff_council'] ;
	
	public $timestamps = false ;

	public function character()
	{
		return $this->belongsTo('CharactersModel', 'staff_position', 'char_id');
	}

	public function department()
	{
		return $this->belongsTo('DepartmentsModel', 'staff_department', 'dept_id');
	}

	public function positions()
	{
		return $this->hasMany('FleetPositionsModel', 'f_department_id');
	}

}