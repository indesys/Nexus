<?php namespace Lambda\Core\Models ;

use Eloquent ;

class SettingsModel extends Eloquent
{
	protected $primaryKey = 'setting_id' ;
	protected $table = 'settings' ;
	protected $fillable = ['site_title', 'fleet_name', 'admin_email'] ;
}