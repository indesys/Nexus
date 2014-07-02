<?php namespace Nexus\Core\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait,
	Eloquent;

class MenuModel extends Eloquent
{
	use SoftDeletingTrait;

	protected $table = 'menu_sub' ;
	protected $fillable = ['text', 'link', 'pg_class', 'list_order', 'active'] ;
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}