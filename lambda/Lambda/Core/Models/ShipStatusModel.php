<?php namespace Lambda\Core\Models ;

use Eloquent ;

class ShipStatusModel extends Eloquent
{
	protected $primaryKey = 'status_id' ;
	protected $table = 'ship_status' ;
	protected $fillable = ['status_name'] ;
	
	public $timestamps = false ;


	public function ships()
	{
    	return $this->hasMany('ShipsModel', 'ship_status');
	}

}