<?php namespace Nexus\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class PositionModel extends \Eloquent {

    use SoftDeletingTrait;

    protected $table = 'positions';
    protected $fillable = ['dept_id', 'name', 'description', 'order'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function characters()
    {
        return $this->belongsToMany('CharacterModel', 'manifests', 'position_id', 'character_id');
    }

    public function department()
    {
        return $this->belongsTo('DepartmentModel');
    }

}
