<?php namespace Lambda\Core\Models ;

use Eloquent ;

class ShipsModel extends Eloquent
{
	protected $primaryKey = 'ship_id' ;
	protected $table = 'ships' ;
	protected $fillable = ['ship_name_prefix', 'ship_name', 'ship_registry_prefix', 'ship_registry', 'ship_tf', 'ship_tg', 'ship_banner', 'ship_website', 'ship_class', 'ship_commanding', 'ship_exec', 'ship_status', 'ship_sim_format', 'ship_intro'] ;
	
	public $timestamps = false ;


	public function taskforce()
	{
    	return $this->belongsTo('TaskForcesModel', 'ship_tf', 'tf_id');
	}

	public function taskgroup()
	{
    	return $this->belongsTo('TaskGroupsModel', 'ship_tg', 'tg_id');
	}

	public function crew()
	{
    	return $this->belongsToMany('CharactersModel', 'manifests', 'ship_id', 'char_id');
	}

	public function nameprefix()
	{
    	return $this->belongsTo('NamePrefixModel', 'ship_name_prefix', 'n_prefix_id');
	}

	public function registryprefix()
	{
    	return $this->belongsTo('RegistryPrefixModel', 'ship_registry_prefix', 'r_prefix_id');
	}

	public function shipstatus()
	{
    	return $this->belongsTo('ShipStatusModel', 'ship_status', 'status_id');
	}

	public function shipclass()
	{
    	return $this->belongsTo('ShipClassModel', 'ship_class', 'class_id');
	}

	public function co()
	{
    	return $this->hasOne('CharactersModel', 'char_id', 'ship_commanding');
	}

	public function xo()
	{
    	return $this->hasOne('CharactersModel', 'char_id', 'ship_exec');
	}

}