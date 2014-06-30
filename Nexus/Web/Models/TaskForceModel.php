<?php namespace Nexus\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class TaskForceModel extends \Eloquent {

    use SoftDeletingTrait;

    protected $table = 'task_forces';
    protected $fillable = ['name'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function taskgroups()
    {
        return $this->hasMany('TaskGroupModel', 'task_force_id');
    }

}
