<?php namespace Lambda\Core\Models ;

use Eloquent ;

class RanksModel extends Eloquent
{
	protected $primaryKey = 'rank_id' ;
	protected $table = 'ranks' ;
	protected $fillable = ['rank_short_name', 'rank_name', 'rank_rank_order', 'rank_image'] ;
	
	public $timestamps = false ;


	public function rank()
	{
    	return $this->hasMany('CharactersModel', 'rank_id');
	}

	public function co()
	{
    	return $this->hasOne('CharactersModel', 'rank_id');
	}

}