<?php namespace Nexus\Core\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class ShipModel extends \Eloquent {

    use SoftDeletingTrait;

    protected $primaryKey = 'ship_id' ;
	protected $table = 'ships';
    protected $fillable = ['ship_name_prefix', 'ship_name', 'ship_registry_prefix', 'ship_registry', 'ship_tf', 'ship_tg', 'ship_banner', 'ship_website', 'ship_class', 'ship_co', 'ship_xo', 'ship_status', 'ship_sim_format', 'ship_intro'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];


	public function taskforce()
	{
    	return $this->belongsTo('TaskForceModel', 'ship_tf', 'tf_id');
	}

	public function taskgroup()
	{
    	return $this->belongsTo('TaskGroupModel', 'ship_tg', 'tg_id');
	}

	public function crew()
	{
    	return $this->belongsToMany('CharacterModel', 'manifests', 'ship_id', 'char_id');
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
    	return $this->hasOne('CharacterModel', 'char_id', 'ship_co');
	}

	public function xo()
	{
    	return $this->hasOne('CharacterModel', 'char_id', 'ship_xo');
	}

}
