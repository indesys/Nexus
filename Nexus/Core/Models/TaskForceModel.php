<?php namespace Nexus\Core\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait,
    Eloquent;

class TaskForceModel extends Eloquent {

    use SoftDeletingTrait;

    protected $table = 'task_forces';
    protected $fillable = ['name', 'alias', 'image', 'url'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function taskgroups()
    {
        return $this->hasMany('TaskGroupModel', 'task_force_id');
    }

	public function ships()
	{
    	return $this->hasMany('ShipModel', 'task_force_id');
	}

}
