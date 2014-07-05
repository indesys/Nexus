@extends('layouts.master')

@section('title')
	Task Forces
@stop


@section('body')

<h1>Task Forces</h1>

<p>The pride of the fleet, this is a listing of all the active task forces in the fleet.</p>

<div class="data-table" style="text-align:center;">
	@foreach ($task_forces as $tf)
		<div class="col-sm-12 col-lg-12">{{ $tf->name ." - ". $tf->alias }}</div>
		<div class="col-sm-12 col-lg-12">{{ HTML::image('assets/uploads/taskforce/'.$tf->image) }}</div>
		<div class="col-sm-12 col-lg-12" style="font-size:0.8em;">{{ HTML::link($tf->url) }}</div>
		<div class="col-sm-12 col-lg-12">&nbsp;</div>
	@endforeach
</div>

@stop
