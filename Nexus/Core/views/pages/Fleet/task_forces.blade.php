@extends('layouts.master')

@section('title')
	Task Forces
@stop

@section('body')
	<h1>Task Forces</h1>

	@foreach ($task_forces as $tf)
		<div class="text-center">
			<h3>{{ $tf->name ." - ". $tf->alias }}</h3>
			<p>{{ HTML::image('assets/uploads/taskforce/'.$tf->image) }}</p>
			<p>
				<a href="{{ $tf->url }}" class="btn btn-default">Task Force Website</a>
				&nbsp;&nbsp;
				<a href="{{ route('tf_ships', [$tf->id]) }}" class="btn btn-default">Task Force Ships</a>
			</p>
			<hr>
		</div>
	@endforeach
@stop
