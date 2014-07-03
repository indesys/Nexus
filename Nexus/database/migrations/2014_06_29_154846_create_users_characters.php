<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersCharacters extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->bigIncrements('id'); // renamed user_id to id
			$table->string('username', 20);
			$table->string('password', 96);
			$table->string('email'); // let email be 255 characters
			$table->string('name'); // let name be 255 characters
			$table->string('aim', 50)->nullable();
			$table->string('yim', 50)->nullable();
			$table->string('msn', 50)->nullable();
			$table->string('icq', 15)->nullable();
			$table->datetime('join_date');
			$table->datetime('leave_date')->nullable();
			$table->datetime('last_login')->nullable();
			$table->boolean('active')->default((int) true);
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('characters', function(Blueprint $table)
		{
			$table->bigIncrements('id'); // changed char_id to id
			$table->bigInteger('user_id')->unsigned();
			$table->integer('rank_id')->default(0);
			$table->string('name'); // for something like this, I don't think it's necessary to have the name split
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('ranks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('short_name', 50);
			$table->integer('sequence')->default(99); // 'order' gave a flag saying it was protected by MySQL
			$table->string('image');
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('positions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('dept_id')->unsigned();
			$table->string('name');
			$table->text('description')->nullable();
			$table->integer('sequence')->default(99); // 'order' gave a flag saying it was protected by MySQL
			$table->integer('admin')->default(0);
			$table->integer('open')->default(1);
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('awards', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('description')->nullable();
			$table->string('image');
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('departments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('description')->nullable();
			$table->integer('sequence')->default(99); // 'order' gave a flag saying it was protected by MySQL
			$table->string('image')->nullable();
			$table->string('url')->nullable();
			$table->boolean('admin')->default((int) false); // be as generic as possible; others may not call it council
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::dropIfExists('users');
		Schema::dropIfExists('characters');
		Schema::dropIfExists('ranks');
		Schema::dropIfExists('positions');
		Schema::dropIfExists('awards');
		Schema::dropIfExists('departments');
	}

}
