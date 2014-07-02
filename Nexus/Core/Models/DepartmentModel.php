<?php namespace Nexus\Core\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait,
    Eloquent;

class DepartmentModel extends Eloquent {

    use SoftDeletingTrait;

    protected $table = 'departments';
    protected $fillable = ['name', 'sequence', 'description', 'image', 'url', 'admin'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function positions()
    {
        return $this->hasMany('PositionModel', 'dept_id')
            ->orderBy('sequence', 'asc');
    }

    public function scopeAdmin($query)
    {
        $query->where('admin', (int) true);
    }

}
