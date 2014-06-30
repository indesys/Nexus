<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFleet extends Migration {

	public function up()
	{
		Schema::create('task_forces', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('task_groups', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('task_force_id')->unsigned();
			$table->string('name');
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('ships', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('task_group_id')->unsigned();
			$table->string('name');
			$table->string('url');
			$table->bigInteger('commanding_officer')->unsigned()->nullable();
			$table->bigInteger('executive_officer')->unsigned()->nullable();
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('manifests', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->integer('ship_id')->unsigned();
			$table->bigInteger('character_id')->unsigned();
			$table->integer('position_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::dropIfExists('task_forces');
		Schema::dropIfExists('task_groups');
		Schema::dropIfExists('ships');
		Schema::dropIfExists('manifests');
	}

}
