@extends('layouts.master')

@section('title')

Fleet Departments

@stop



@section('body')

<h1>Fleet Departments</h1>

<p>This page features various links to the fleet's departments.</p>

<table class="table100">
	@foreach ($departments as $dept)
		<tr><td width="400px">{{ HTML::image('assets/uploads/departments/'.$dept->image) }}</td>
			<td style="font-size:0.8em;">{{ HTML::link($dept->url) }}</td></tr>
	@endforeach
</table>

@stop