@extends('layouts.master')

@section('body')

<h1>Task Forces</h1>

<p>The pride of the fleet, this is a listing of all the active task forces in the fleet.</p>

<table class="table100">
	@foreach ($task_forces as $tf)
		<tr><td align="center">Task Force {{ $tf->tf_number ." - ". $tf->tf_name }}</td></tr>
		<tr><td align="center">{{ HTML::image('assets/uploads/taskforce/'.$tf->tf_banner) }}</td></tr>
		<tr><td align="center" style="font-size:0.8em;">{{ HTML::link($tf->tf_website) }}</td></tr>
		<tr><td>&nbsp;</td></tr>
	@endforeach
</table>

@stop