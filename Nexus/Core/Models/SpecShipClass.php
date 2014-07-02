<?php namespace Nexus\Core\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait,
	Eloquent;

class SpecClassShipModel extends Eloquent
{
	use SoftDeletingTrait;

	protected $table = 'spec_classes_ship' ;
	protected $fillable = ['category_id', 'name', 'image', 'expected_duration', 'time_resupply', 'time_refit', 'officers', 'enlisted', 'marines', 'passengers', 'emergency_capacity', 'cruising_speed', 'max_speed', 'emergency_speed', 'length', 'width', 'height', 'decks', 'shuttlebays', 'fighters', 'fighter_qt', 'runabouts', 'runabout_qt', 'shuttles', 'shuttles_qt', 'transports', 'transports_qt', 'defenses', 'phasers', 'phasers_qt', 'shields', 'launchers', 'quantum', 'photon', 'tricobalt', 'notes', 'deck_listing'] ;
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];


	public function ships()
	{
    	return $this->hasMany('ShipModel', 'ship_class_id');
	}

}