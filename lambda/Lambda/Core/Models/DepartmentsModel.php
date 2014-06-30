<?php namespace Lambda\Core\Models ;

use Eloquent ;

class DepartmentsModel extends Eloquent
{
	protected $primaryKey = 'dept_id' ;
	protected $table = 'departments' ;
	protected $fillable = ['dept_name', 'dept_order', 'dept_image', 'dept_website', 'dept_is_council'] ;
	
	public $timestamps = false ;


    public function positions()
    {
        return $this->hasMany('PositionsModel', 'dept_id')->orderBy('position_name');
    }

    public function scopeIsCouncil($query)
    {
        $query->where('dept_is_council', (int) true);
    }
}