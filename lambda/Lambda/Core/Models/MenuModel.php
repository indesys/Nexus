<?php namespace Lambda\Core\Models ;

use Eloquent ;

class MenuModel extends Eloquent
{
	protected $primaryKey = 'submenu_id' ;
	protected $table = 'menu_sub' ;
	protected $fillable = ['submenu_text', 'submenu_link', 'submenu_class', 'submenu_order', 'submenu_active'] ;
	
	public $timestamps = false ;
}