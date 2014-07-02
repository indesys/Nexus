@extends('layouts.master')

@section('title')

Task Forces

@stop



@section('body')

<h1>Task Forces</h1>

<p>The pride of the fleet, this is a listing of all the active task forces in the fleet.</p>

<table class="table100">
	@foreach ($task_forces as $tf)
		<tr><td align="center">{{ $tf->name ." - ". $tf->alias }}</td></tr>
		<tr><td align="center">{{ HTML::image('assets/uploads/taskforce/'.$tf->image) }}</td></tr>
		<tr><td align="center" style="font-size:0.8em;">{{ HTML::link($tf->url) }}</td></tr>
		<tr><td>&nbsp;</td></tr>
	@endforeach
</table>

@stop