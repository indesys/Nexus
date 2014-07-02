<?php namespace Nexus\Core\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait,
	Eloquent;

class ShipStatusModel extends Eloquent
{
	use SoftDeletingTrait;

	protected $table = 'ship_status' ;
	protected $fillable = ['name'] ;
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];


	public function ships()
	{
    	return $this->hasMany('ShipModel', 'status_id');
	}

}