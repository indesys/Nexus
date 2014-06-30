<?php namespace Nexus\Core\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class DepartmentModel extends \Eloquent {

    use SoftDeletingTrait;

    protected $primaryKey = 'dept_id' ;
    protected $table = 'departments';
    protected $fillable = ['dept_name', 'dept_order', 'dept_image', 'dept_website', 'dept_is_council'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function positions()
    {
        return $this->hasMany('PositionModel', 'dept_id')->orderBy('position_order');
    }

    public function scopeDeptIsCouncil($query)
    {
        $query->where('dept_is_council', (int) true);
    }

}
