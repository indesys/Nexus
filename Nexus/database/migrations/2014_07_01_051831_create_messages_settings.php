<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesSettings extends Migration {

	public function up()
	{
		Schema::create('messages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('introduction')->nullable();
			$table->text('message')->nullable();
			$table->text('history')->nullable();
			$table->text('cp_message')->nullable();
			$table->text('join_disclaimer')->nullable();
			$table->text('rules')->nullable();
			$table->text('faqs')->nullable();
			$table->text('accept_message')->nullable();
			$table->text('reject_message')->nullable();
			$table->text('credits_perm')->nullable();
			$table->text('credits')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('settings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('site_title', 50);
			$table->string('fleet_name', 50);
			$table->string('admin_email');
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('news', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('category_id')->unsigned();
			$table->string('title');
			$table->text('content');
			$table->integer('activated')->default((int) false);
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('news_categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('menu_sub', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('text');
			$table->string('link');
			$table->enum('pg_class',array('main','fleet','wiki'))->default('main');
			$table->integer('list_order')->default(99);
			$table->integer('active')->default((int) false);
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('links', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('category_id')->unsigned();
			$table->string('name');
			$table->string('url');
			$table->text('description');
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('link_categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::dropIfExists('messages');
		Schema::dropIfExists('settings');
		Schema::dropIfExists('news');
		Schema::dropIfExists('news_categories');
		Schema::dropIfExists('menu_sub');
		Schema::dropIfExists('links');
		Schema::dropIfExists('link_categories');
	}

}
