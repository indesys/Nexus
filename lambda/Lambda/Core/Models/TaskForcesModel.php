<?php namespace Lambda\Core\Models ;

use Eloquent ;

class TaskForcesModel extends Eloquent
{
	protected $primaryKey = 'tf_id' ;
	protected $table = 'task_forces' ;
	protected $fillable = ['tf_number', 'tf_name', 'tf_banner', 'tf_website'] ;
	
	public $timestamps = false ;


	public function ships()
	{
    	return $this->hasMany('ShipsModel', 'ship_tf');
	}

}