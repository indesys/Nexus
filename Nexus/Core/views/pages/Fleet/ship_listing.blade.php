@extends('layouts.master')

@section('title')
	Ship Listing Options
@stop


@section('body')

<h1>Ship Listing</h1>

<p>From this page you can get a listing of all the ships in each task force.  Please select a task force below to continue.</p>

<div class="data-table" style="text-align:center;">
	@foreach ($task_forces as $tf)
		<div class="col-sm-12 col-lg-12">{{ $tf->name ." - ". $tf->alias }}</div>
		<div class="col-sm-12 col-lg-12">{{ HTML::image('assets/uploads/taskforce/'.$tf->image) }}</div>
		<div class="col-sm-12 col-lg-12" style="font-size:0.8em;">{{ HTML::link('fleet/tf_ships/'.$tf->id, 'Show Ships') }}</div>
		<div class="col-sm-12 col-lg-12">&nbsp;</div>
	@endforeach
</div>

@stop