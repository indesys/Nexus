<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacters extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('name');
			$table->string('email');
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('characters', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('user_id')->unsigned();
			$table->string('name');
			$table->integer('rank_id')->default(0);
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('ranks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
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
			$table->integer('order')->default(99);
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('departments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('description')->nullable();
			$table->integer('order')->default(99);
			$table->boolean('admin')->default((int) false);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users');
		Schema::dropIfExists('characters');
		Schema::dropIfExists('departments');
		Schema::dropIfExists('positions');
		Schema::dropIfExists('ranks');
	}

}
