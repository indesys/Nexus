<?php namespace Lambda\Core\Models ;

use Eloquent ;

class TaskGroupsModel extends Eloquent
{
	protected $primaryKey = 'tg_id' ;
	protected $table = 'task_groups' ;
	protected $fillable = ['tf_id', 'tg_group_code', 'tg_name', 'tg_banner'] ;
	
	public $timestamps = false ;


	public function ships()
	{
    	return $this->hasMany('ShipsModel', 'ship_tg');
	}

}