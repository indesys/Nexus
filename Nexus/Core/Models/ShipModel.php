<?php namespace Nexus\Core\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait,
	Eloquent;

class ShipModel extends Eloquent {

    use SoftDeletingTrait;

    protected $table = 'ships';
    protected $fillable = ['task_force_id', 'task_group_id', 'ship_class_id', 'name', 'registry', 'image', 'url', 'status_id', 'format', 'intro', 'commanding_officer', 'executive_officer'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];


	public function taskforce()
	{
    	return $this->belongsTo('TaskForceModel', 'task_force_id');
	}

	public function taskgroup()
	{
    	return $this->belongsTo('TaskGroupModel', 'task_group_id');
	}

	public function crew()
	{
    	return $this->belongsToMany('CharacterModel', 'manifests');
	}

	public function shipstatus()
	{
    	return $this->belongsTo('ShipStatusModel', 'status');
	}

	public function shipclass()
	{
    	return $this->belongsTo('ShipClassModel', 'ship_class_id');
	}

	public function co()
	{
    	return $this->hasOne('CharacterModel', 'commanding_officer');
	}

	public function xo()
	{
    	return $this->hasOne('CharacterModel', 'executive_officer');
	}

}
