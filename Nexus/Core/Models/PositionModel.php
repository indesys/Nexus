<?php namespace Nexus\Core\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class PositionModel extends \Eloquent {

    use SoftDeletingTrait;

    protected $primaryKey = 'position_id' ;
    protected $table = 'positions';
    protected $fillable = ['dept_id', 'position_name', 'position_order', 'dept_id', 'ship_id', 'char_id', 'positions_open', 'position_is_council'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function characters()
    {
        return $this->belongsToMany('CharacterModel', 'manifests', 'position_id', 'char_id');
    }

    public function department()
    {
        return $this->belongsTo('DepartmentModel', 'dept_id');
    }

}
