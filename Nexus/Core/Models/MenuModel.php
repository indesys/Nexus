<?php namespace Nexus\Core\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait,
	Model;

class MenuModel extends Model
{
	use SoftDeletingTrait;

	protected $table = 'menu_sub' ;
	protected $fillable = ['text', 'link', 'pg_class', 'sequence', 'active'] ;
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

	public static function getItems($pageClass)
	{
		return static::startQuery()->where('active', (int) true)
			->where('pg_class', $pageClass)
			->orderBy('sequence', 'asc')
			->get();
	}
}
