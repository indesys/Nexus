<?php namespace Nexus\Core\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait,
    Eloquent;

class TaskGroupModel extends Eloquent {

    use SoftDeletingTrait;

    protected $table = 'task_groups';
    protected $fillable = ['task_force_id', 'name', 'alias', 'image', 'url'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function taskforce()
    {
        return $this->belongsTo('TaskForceModel');
    }

    public function ships()
    {
        return $this->hasMany('ShipModel', 'task_group_id');
    }

}
