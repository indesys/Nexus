<?php namespace Nexus\Core\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait,
    Eloquent;

class CharacterModel extends Eloquent {

    use SoftDeletingTrait;

    protected $table = 'characters';
    protected $fillable = ['user_id', 'rank_id', 'name'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function positions()
    {
        return $this->belongsToMany('PositionModel', 'manifests');
    }

    public function printName()
    {
        return $this->rank->rank_name." ".$this->name;
    }

    public function ship()
    {
        return $this->belongsToMany('ShipModel', 'manifests');
    }

    public function rank()
    {
        return $this->belongsTo('RankModel', 'rank_id');
    }

    public function co()
    {
        return $this->belongsTo('ShipModel', 'commanding_officer');
    }

    public function xo()
    {
        return $this->belongsTo('ShipModel', 'executive_officer');
    }

}
