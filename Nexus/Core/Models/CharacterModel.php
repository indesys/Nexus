<?php namespace Nexus\Core\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class CharacterModel extends \Eloquent {

    use SoftDeletingTrait;

    protected $table = 'characters';
    protected $fillable = ['user_id', 'name', 'rank_id'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function positions()
    {
        return $this->belongsToMany('PositionModel', 'manifests', 'character_id', 'position_id');
    }

    public function rank()
    {
        return $this->belongsTo('RankModel');
    }

    public function printName()
    {
        return $this->rank->name." ".$this->name;
    }

}
