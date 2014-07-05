@extends('layouts.master')

@section('title')
	Ship Listing
@stop


@section('body')
	<h1>Ship Listing</h1>
	
	@foreach ($task_forces as $tf)
		<div class="text-center">
			<h3>{{ $tf->name." - ".$tf->alias }}</h3>
			<p>{{ HTML::image('assets/uploads/taskforce/'.$tf->image) }}</p>
			<p><a href="{{ route('tf_ships', [$tf->id]) }}" class="btn btn-default">Show Ships</a></p>
			<hr>
		</div>
	@endforeach
@stop
