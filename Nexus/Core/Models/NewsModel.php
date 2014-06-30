<?php namespace Nexus\Core\Models ;

use Eloquent ;

class NewsModel extends Eloquent
{
	protected $primaryKey = 'news_id' ;
	protected $table = 'news' ;
	protected $fillable = ['news_category', 'news_title', 'news_content', 'news_posted', 'news_active'] ;
	protected $dates = array('news_posted') ;
	
	public $timestamps = false ;
}