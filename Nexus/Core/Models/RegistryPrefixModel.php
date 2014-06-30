<?php namespace Nexus\Core\Models ;

use Eloquent ;

class RegistryPrefixModel extends Eloquent
{
	protected $primaryKey = 'r_prefix_id' ;
	protected $table = 'reg_prefixes' ;
	protected $fillable = ['r_prefix'] ;
	
	public $timestamps = false ;


	public function ships()
	{
    	return $this->hasMany('ShipsModel', 'ship_reg_prefix');
	}

}