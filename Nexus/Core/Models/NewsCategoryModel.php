<?php namespace Nexus\Core\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait,
	Eloquent;

class NewsCategoryModel extends Eloquent
{
	use SoftDeletingTrait;

	protected $table = 'news_categories' ;
	protected $fillable = ['name'] ;
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function category()
    {
        return $this->hasMany('NewsCategoryModel', 'category_id');
    }
}