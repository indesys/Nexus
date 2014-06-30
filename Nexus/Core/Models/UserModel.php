<?php namespace Nexus\Core\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class UserModel extends \Eloquent {

    use SoftDeletingTrait;

    protected $table = 'users';
    protected $fillable = ['name', 'email'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

}
