<?php namespace Nexus\Core\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait,
	Eloquent;

class NewsModel extends Eloquent
{
	use SoftDeletingTrait;

	protected $table = 'news' ;
	protected $fillable = ['category_id', 'title', 'content', 'posted', 'activated'] ;
    protected $dates = ['posted', 'created_at', 'updated_at', 'deleted_at'];

    public function category()
    {
        return $this->belongsTo('NewsCategoryModel');
    }
}