<?php namespace Nexus\Core\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait,
	Eloquent;

class NewsModel extends Eloquent
{
	use SoftDeletingTrait;

	protected $table = 'news' ;
	protected $fillable = ['category_id', 'title', 'content', 'activated'] ;
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}