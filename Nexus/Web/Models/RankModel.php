<?php namespace Nexus\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class RankModel extends \Eloquent {

    use SoftDeletingTrait;

    protected $table = 'ranks';
    protected $fillable = ['name', 'image'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function character()
    {
        return $this->hasMany('CharacterModel', 'rank_id');
    }

}
