<?php namespace Nexus\Core\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class TaskForceModel extends \Eloquent {

    use SoftDeletingTrait;

    protected $primaryKey = 'tf_id' ;
	protected $table = 'task_forces';
    protected $fillable = ['tf_number', 'tf_name', 'tf_banner', 'tf_website'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function taskgroups()
    {
        return $this->hasMany('TaskGroupModel', 'task_force_id');
    }

	public function ships()
	{
    	return $this->hasMany('ShipModel', 'ship_tf');
	}

}
