<?php namespace Nexus\Core\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait,
	Eloquent;

class SettingModel extends Eloquent
{
	use SoftDeletingTrait;

	protected $table = 'settings' ;
	protected $fillable = ['site_title', 'fleet_name', 'admin_email'] ;
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}