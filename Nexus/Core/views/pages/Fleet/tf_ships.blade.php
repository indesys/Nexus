@extends('layouts.master')

@section('title')

Task Force Ship Listing

@stop



@section('body')

@if (!isset($tf))
	<h1>Notice</h1>
	<h2>System Illegal Representation</h2>
	<p>The Task Force ID presented in the link, does not correspond to anything in the system.  Please go back and select a valid link.</p>
@else

<h1>{{ $tf->tf_name }}</h1>

<h2>Ship Listing</h2>

<p>The ships in this task force are listed below.</p>

@foreach ($tf->ships as $ship)

	<table class='table100'>
		<tr><td align='center' colspan='4'><font style='font-size:1.3em; font-weight:bold;'>{{ HTML::link($ship->url,$ship->name) }}</font><br /><font class='font_small'>{{ $ship->registry }}</font></td></tr>
		<tr><td width='420px' rowspan='8'>{{ HTML::image('assets/uploads/ships/'.$ship->image) }}</td>

		@if ($ship->commanding_officer == NULL)
			<td width='170px'>Commanding Officer:</td><td width='150px'>{{ HTML::image('assets/uploads/ranks/ds9/b-blank1.png') }}</td><td><font style='color:#fc0;'>Open Command!</font></td>
		@else
			<td width='170px'>Commanding Officer:</td><td width='150px'>{{ HTML::image('assets/uploads/ranks/ds9/'.$ship->co->rank->image) }}</td><td>{{ $ship->co->rank->name ." ". $ship->co->name }}</td>
		@endif

		@if ($ship->commanding_officer == NULL)
			<tr><td colspan='3'>&nbsp;</td></tr>
		@elseif ($ship->commanding_officer != NULL && $ship->executive_officer == NULL)
			<tr><td>Executive Officer:</td><td colspan='2' style='color:#f30;'>No XO has been assigned yet.</td></tr>
		@else
			<tr><td>Executive Officer:</td><td width='150px'>{{ HTML::image('assets/uploads/ranks/ds9/'.$ship->xo->rank->image) }}</td><td>{{ $ship->xo->rank->name ." ". $ship->xo->name }}</td></tr>
		@endif
		
		<tr><td colspan='4'>&nbsp;</td></tr>

		<tr style='font-size:0.8em;'><td width='170px'>Task Force/Task Group:</td><td colspan='2'>{{ $ship->taskforce->name ." | ". $ship->taskgroup->name }}</td></tr>
		<tr style='font-size:0.8em;'><td width='170px'>Status:</td><td colspan='2'>{{ $ship->status_id }}</td></tr>
		<tr style='font-size:0.8em;'><td width='170px'>Class:</td><td colspan='2'>{{ $ship->ship_class_id }}-class</td></tr>

		@if ($ship->commanding_officer == NULL)
			<tr style='font-size:0.8em;'><td colspan='3'>&nbsp;</td></tr>
		@else
			<tr style='font-size:0.8em;'><td width='170px'>Total Crew:</td><td colspan='2'>{{ $ship->crew->count() }}</td></tr>
		@endif
		
		@if ($ship->commanding_officer == NULL)
			<tr style='font-size:0.8em;'><td colspan='3'>&nbsp;</td></tr>
		@else
			<tr style='font-size:0.8em;'><td>Simming Format:</td><td colspan='2'>Play by {{ $ship->format }}</td></tr>
		@endif

		<tr><td align='center' colspan='4'>&nbsp;</td></tr>
		<tr><td align='center' colspan='4'>{{ $ship->intro }}</td></tr>

	</table>
	<br />
	<hr>
	<br />

@endforeach

@endif

@stop