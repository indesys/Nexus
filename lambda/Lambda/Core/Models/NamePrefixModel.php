<?php namespace Lambda\Core\Models ;

use Eloquent ;

class NamePrefixModel extends Eloquent
{
	protected $primaryKey = 'n_prefix_id' ;
	protected $table = 'name_prefixes' ;
	protected $fillable = ['n_prefix'] ;
	
	public $timestamps = false ;


	public function ships()
	{
    	return $this->hasMany('ShipsModel', 'ship_name_prefix');
	}

}