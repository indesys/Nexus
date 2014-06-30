<?php namespace Lambda\Core\Models ;

use Eloquent ;

class PositionsModel extends Eloquent
{
	protected $primaryKey = 'position_id' ;
	protected $table = 'positions' ;
	protected $fillable = ['department_id', 'position_name', 'dept_id', 'ship_id', 'char_id', 'positions_open', 'position_is_council'] ;
	
	public $timestamps = false ;


    public function characters()
    {
        return $this->hasMany('CharactersModel', 'fleet_position_id');
    }

    public function department()
    {
        return $this->belongsTo('DepartmentsModel', 'dept_id');
    }

}