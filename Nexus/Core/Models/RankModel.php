<?php namespace Nexus\Core\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class RankModel extends \Eloquent {

    use SoftDeletingTrait;

    protected $primaryKey = 'rank_id' ;
	protected $table = 'ranks';
    protected $fillable = ['rank_short_name', 'rank_name', 'rank_rank_order', 'rank_image'];
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
