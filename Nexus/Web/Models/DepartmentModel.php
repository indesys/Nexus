<?php namespace Nexus\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class DepartmentModel extends \Eloquent {

    use SoftDeletingTrait;

    protected $table = 'departments';
    protected $fillable = ['name', 'description', 'order', 'admin'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function positions()
    {
        return $this->hasMany('PositionModel', 'dept_id');
    }

    public function scopeAdmin($query)
    {
        $query->where('admin', (int) true);
    }

}
