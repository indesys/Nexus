<?php namespace Lambda\Core\Models ;

use Eloquent ;

class CharactersModel extends Eloquent
{
	protected $primaryKey = 'char_id' ;
	protected $table = 'characters' ;
	protected $fillable = ['user_id', 'rank_id', 'char_first_name', 'char_middle_name', 'char_last_name', 'ship_id', 'ship_position_id', 'fleet_position_id'] ;
	
	public $timestamps = false ;


	public function ship()
	{
    	return $this->belongsToMany('ShipsModel', 'manifests', 'char_id', 'ship_id');
	}

	public function rank()
	{
    	return $this->belongsTo('RanksModel', 'rank_id', 'rank_id');
	}

	public function co()
	{
    	return $this->belongsTo('ShipsModel', 'char_id', 'ship_commanding');
	}

	public function xo()
	{
    	return $this->belongsTo('ShipsModel', 'char_id', 'ship_exec');
	}

	public function character()
	{
		return $this->hasOne('PositionsModel', 'char_id');
	}

}