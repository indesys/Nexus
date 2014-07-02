<?php namespace Nexus\Core\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait,
    Eloquent;

class PositionModel extends Eloquent {

    use SoftDeletingTrait;

    protected $table = 'positions';
    protected $fillable = ['dept_id', 'name', 'description', 'sequence', 'open'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function characters()
    {
        return $this->belongsToMany('CharacterModel', 'manifests');
    }

    public function department()
    {
        return $this->belongsTo('DepartmentModel', 'dept_id');
    }

}
