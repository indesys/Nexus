<?php namespace Nexus\Core\Models;

use Eloquent;

class ManifestModel extends Eloquent {

    protected $table = 'manifests';
    protected $fillable = ['ship_id', 'character_id', 'position_id'];
    
    public $timestamps = false;

}
