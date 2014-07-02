<?php namespace Nexus\Core\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait,
    Eloquent;

class DepartmentModel extends Eloquent {

    use SoftDeletingTrait;

    protected $table = 'departments';
    protected $fillable = ['name', 'dpt_order', 'description', 'image', 'url', 'admin'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function positions()
    {
        return $this->hasMany('PositionModel', 'dept_id')->orderBy('pos_order');
    }

    public function scopeAdmin($query)
    {
        $query->where('admin', (int) true);
    }

}
