<?php namespace Nexus\Core\Models ;

use Eloquent ;

class SettingModel extends Eloquent
{
	protected $primaryKey = 'setting_id' ;
	protected $table = 'settings' ;
	protected $fillable = ['site_title', 'fleet_name', 'admin_email'] ;
}