<?php namespace Nexus\Core\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait
    Eloquent;

class RankModel extends Eloquent {

    use SoftDeletingTrait;

    protected $table = 'ranks';
    protected $fillable = ['short_name', 'name', 'rnk_order', 'image'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function character()
    {
        return $this->hasMany('CharacterModel', 'rank_id');
    }

	public function rank()
	{
    	return $this->hasMany('CharacterModel', 'rank_id');
	}

	public function co()
	{
    	return $this->hasOne('CharacterModel', 'rank_id');
	}

}
