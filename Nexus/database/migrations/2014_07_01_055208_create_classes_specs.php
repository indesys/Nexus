<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesSpecs extends Migration {

	public function up()
	{

		Schema::create('specs_classes_ship', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('category_id')->unsigned();
			$table->string('name');
			$table->string('image');
			$table->integer('expected_duration')->nullable();
			$table->integer('time_resupply')->nullable();
			$table->integer('time_refit')->nullable();
			$table->integer('officers')->nullable();
			$table->integer('enlisted')->nullable();
			$table->integer('marines')->nullable();
			$table->integer('passengers')->nullable();
			$table->integer('emergency_capacity')->nullable();
			$table->integer('cruising_speed')->nullable();
			$table->integer('max_speed')->nullable();
			$table->integer('emergency_speed')->nullable();
			$table->integer('length')->nullable();
			$table->integer('width')->nullable();
			$table->integer('height')->nullable();
			$table->integer('decks')->nullable();
			$table->integer('shuttlebays')->nullable();
			$table->string('fighters',30)->nullable(); // for an array of values
			$table->integer('fighters_qt')->nullable();
			$table->string('runabouts', 30)->nullable(); // for an array of values
			$table->integer('runabouts_qt')->nullable();
			$table->string('shuttles', 30)->nullable(); // for an array of values
			$table->integer('shuttles_qt')->nullable();
			$table->string('transports', 30)->nullable(); // for an array of values
			$table->integer('transports_qt')->nullable();
			$table->string('defenses', 30)->nullable(); // for an array of values
			$table->string('phasers', 30)->nullable(); // for an array of values
			$table->integer('phasers_qt')->nullable();
			$table->string('shields', 30)->nullable(); // for an array of values
			$table->integer('launchers')->nullable();
			$table->integer('photon')->nullable();
			$table->integer('quantum')->nullable();
			$table->integer('tricobalt')->nullable();
			$table->text('notes')->nullable();
			$table->string('deck_listing', 30)->nullable(); // an html file people can include to the view - Nova way as an enhancement later
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('specs_classes_runabout', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('category_id')->unsigned();
			$table->string('name');
			$table->string('image');
			$table->integer('cruising_speed')->nullable();
			$table->integer('max_speed')->nullable();
			$table->integer('emergency_speed')->nullable();
			$table->integer('length')->nullable();
			$table->integer('width')->nullable();
			$table->integer('height')->nullable();
			$table->string('defenses', 30)->nullable(); // for an array of values
			$table->string('phasers', 30)->nullable(); // for an array of values
			$table->integer('phasers_qt')->nullable();
			$table->string('shields', 30)->nullable(); // for an array of values
			$table->integer('launchers')->nullable();
			$table->integer('photon')->nullable();
			$table->integer('quantum')->nullable();
			$table->integer('tricobalt')->nullable();
			$table->text('notes')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('specs_classes_shuttle', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('category_id')->unsigned();
			$table->string('name');
			$table->string('image');
			$table->integer('cruising_speed')->nullable();
			$table->integer('max_speed')->nullable();
			$table->integer('emergency_speed')->nullable();
			$table->integer('length')->nullable();
			$table->integer('width')->nullable();
			$table->integer('height')->nullable();
			$table->string('defenses', 30)->nullable(); // for an array of values
			$table->string('phasers', 30)->nullable(); // for an array of values
			$table->integer('phasers_qt')->nullable();
			$table->string('shields', 30)->nullable(); // for an array of values
			$table->integer('launchers')->nullable();
			$table->integer('photon')->nullable();
			$table->integer('quantum')->nullable();
			$table->integer('tricobalt')->nullable();
			$table->text('notes')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('specs_classes_fighter', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('category_id')->unsigned();
			$table->string('name');
			$table->string('image');
			$table->integer('cruising_speed')->nullable();
			$table->integer('max_speed')->nullable();
			$table->integer('emergency_speed')->nullable();
			$table->integer('length')->nullable();
			$table->integer('width')->nullable();
			$table->integer('height')->nullable();
			$table->string('defenses', 30)->nullable(); // for an array of values
			$table->string('phasers', 30)->nullable(); // for an array of values
			$table->integer('phasers_qt')->nullable();
			$table->string('shields', 30)->nullable(); // for an array of values
			$table->integer('launchers')->nullable();
			$table->integer('photon')->nullable();
			$table->integer('quantum')->nullable();
			$table->integer('tricobalt')->nullable();
			$table->text('notes')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('specs_classes_transport', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('category_id')->unsigned();
			$table->string('name');
			$table->string('image');
			$table->integer('cruising_speed')->nullable();
			$table->integer('max_speed')->nullable();
			$table->integer('emergency_speed')->nullable();
			$table->integer('length')->nullable();
			$table->integer('width')->nullable();
			$table->integer('height')->nullable();
			$table->integer('decks')->nullable();
			$table->string('defenses', 30)->nullable(); // for an array of values
			$table->string('phasers', 30)->nullable(); // for an array of values
			$table->integer('phasers_qt')->nullable();
			$table->string('shields', 30)->nullable(); // for an array of values
			$table->integer('launchers')->nullable();
			$table->integer('photon')->nullable();
			$table->integer('quantum')->nullable();
			$table->integer('tricobalt')->nullable();
			$table->text('notes')->nullable();
			$table->string('deck_listing', 30)->nullable(); // an html file people can include to the view - Nova way as an enhancement later
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('specs_classes_categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('description')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('specs_defenses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('description');
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('specs_phasers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('description');
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('specs_torpedoes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('description');
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('specs_shields', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('description');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::dropIfExists('specs_classes_ship');
		Schema::dropIfExists('specs_classes_runabout');
		Schema::dropIfExists('specs_classes_shuttle');
		Schema::dropIfExists('specs_classes_fighter');
		Schema::dropIfExists('specs_classes_transport');
		Schema::dropIfExists('specs_classes_categories');
		Schema::dropIfExists('specs_defenses');
		Schema::dropIfExists('specs_phasers');
		Schema::dropIfExists('specs_torpedoes');
		Schema::dropIfExists('specs_shields');
	}

}
