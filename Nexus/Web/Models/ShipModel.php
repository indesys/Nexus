<?php namespace Nexus\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class ShipModel extends \Eloquent {

    use SoftDeletingTrait;

    protected $table = 'ships';
    protected $fillable = ['task_group_id', 'name', 'url', 'commanding_officer',
        'executive_officer'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function taskgroup()
    {
        return $this->belongsTo('TaskGroupModel');
    }

}
