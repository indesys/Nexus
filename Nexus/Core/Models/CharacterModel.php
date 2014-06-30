<?php namespace Nexus\Core\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class CharacterModel extends \Eloquent {

    use SoftDeletingTrait;

    protected $primaryKey = 'char_id' ;
    protected $table = 'characters';
    protected $fillable = ['user_id', 'rank_id', 'char_first_name', 'char_middle_name', 'char_last_name', 'ship_id', 'ship_position_id', 'fleet_position_id'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function positions()
    {
        return $this->belongsToMany('PositionModel', 'manifests', 'character_id', 'position_id');
    }

    public function printName()
    {
        return $this->rank->rank_name." ".$this->name;
    }

    public function ship()
    {
        return $this->belongsToMany('ShipModel', 'manifests', 'char_id', 'ship_id');
    }

    public function rank()
    {
        return $this->belongsTo('RankModel', 'rank_id', 'rank_id');
    }

    public function co()
    {
        return $this->belongsTo('ShipModel', 'char_id', 'ship_commanding');
    }

    public function xo()
    {
        return $this->belongsTo('ShipModel', 'char_id', 'ship_exec');
    }

    public function character()
    {
        return $this->hasOne('PositionModel', 'char_id');
    }

}
