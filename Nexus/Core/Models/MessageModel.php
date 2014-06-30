<?php namespace Nexus\Core\Models ;

use Eloquent ;

class MessageModel extends Eloquent
{
	protected $primaryKey = 'message_id' ;
	protected $table = 'messages' ;
	protected $fillable = ['fleet_intro', 'fleet_message', 'fleet_history', 'cp_message', 'join_disclaimer', 'rules', 'faqs', 'accept_message', 'reject_message', 'site_credits'] ;
}