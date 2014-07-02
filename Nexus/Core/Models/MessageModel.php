<?php namespace Nexus\Core\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait,
	Eloquent;

class MessageModel extends Eloquent
{
	use SoftDeletingTrait;

	protected $table = 'messages' ;
	protected $fillable = ['introduction', 'message', 'history', 'cp_message', 'join_disclaimer', 'rules', 'faqs', 'accept_message', 'reject_message', 'site_credits'] ;
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}