@extends('layouts.master')

@section('body')

<h1>Ship Listing</h1>

<p>From this page you can get a listing of all the ships in each task force.  Please select a task force below to continue.</p>

<table class="table100">
	@foreach ($task_forces as $tf)
		<tr><td align="center">Task Force {{ $tf->tf_number ." - ". $tf->tf_name }}</td></tr>
		<tr><td align="center">{{ HTML::image('assets/uploads/taskforce/'.$tf->tf_banner) }}</td></tr>
		<tr><td align="center" style="font-size:0.8em;">{{ HTML::link('fleet/tf_ships/'.$tf->tf_id, 'Show Ships') }}</td></tr>
		<tr><td>&nbsp;</td></tr>
	@endforeach
</table>

@stop