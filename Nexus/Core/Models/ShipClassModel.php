<?php namespace Nexus\Core\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait,
	Eloquent;

class ShipClassModel extends Eloquent {

    use SoftDeletingTrait;

    protected $table = 'ship_classes';
    protected $fillable = ['name', 'image'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function shipclass()
    {
        return $this->hasOne('ShipModel', 'ship_class_id');
    }

}
