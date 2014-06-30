<?php namespace Lambda\Core\Models ;

use Eloquent ;

class ShipClassModel extends Eloquent
{
	protected $primaryKey = 'class_id' ;
	protected $table = 'ship_classes' ;
	protected $fillable = ['class_category', 'class_name', 'class_image', 'class_expected_duration', 'class_time_resupply', 'class_time_refit', 'class_officers', 'class_enlisted', 'class_marines', 'class_passengers', 'class_emergency', 'class_cruising_speed', 'class_max_speed', 'class_emergency_speed', 'class_length', 'class_width', 'class_height', 'class_decks', 'class_shuttlebays', 'class_fighters', 'class_fighter_quantity', 'class_runabouts', 'class_runabout_quantity', 'class_shuttles', 'class_shuttles_quantity', 'class_transports', 'class_transports_quantity', 'class_defenses', 'class_phasers', 'class_phasers_quantity', 'class_shields', 'class_launchers', 'class_quantum', 'class_photon', 'class_tricobalt', 'class_notes', 'class_deck_listing_file'] ;
	
	public $timestamps = false ;


	public function ships()
	{
    	return $this->hasMany('ShipsModel', 'ship_class');
	}

}