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

<h1>{{ $tf->name ." - ". $tf->alias }}</h1>

<h2>Ship Listing</h2>

<p>The ships in this task force are listed below.</p>

@foreach ($tf->ships as $ship)
		<center><span style='font-size:1.3em; font-weight:bold;'>{{ HTML::link($ship->url,$ship->name) }}</span><br />
		<span class='font_small'>{{ $ship->registry }}</span></center>

	<table class='table100'>
		<tr><td width='420px' rowspan='7'>{{ HTML::image('assets/uploads/ships/'.$ship->image) }}</td>

		<tr style='font-size:0.8em;'><td width='170px'>Task Force</td><td colspan='2'>{{ $ship->taskforce->name }}</td></tr>
		<tr style='font-size:0.8em;'><td width='170px'>Task Group</td><td colspan='2'>{{ $ship->taskgroup->alias }}</td></tr>
		<tr style='font-size:0.8em;'><td width='170px'>Status:</td><td colspan='2'>{{ $ship->shipstatus->name }}</td></tr>
		<tr style='font-size:0.8em;'><td width='170px'>Class:</td><td colspan='2'>{{ $ship->shipclass->name }}-class</td></tr>

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
	</table>
	<br />
	<table class='table100'>
		@if ($ship->commanding_officer == NULL)
			<tr><td colspan='2' width='50%' align='center'>Commanding Officer</td><td colspan='2'>&nbsp;</td></tr>
			<tr><td>{{ HTML::image('assets/uploads/ranks/ds9/b-blank1.png') }}</td><td><font style='color:#fc0;'>Open Command!</font></td><td>&nbsp;</td><td>&nbsp;</td></tr>
		@elseif ($ship->commanding_officer != NULL && $ship->executive_officer == NULL)
			<tr><td colspan='2' width='50%' align='center'>Commanding Officer</td><td colspan='2' align='center'>Executive Officer</td></tr>
			<tr><td width=''>{{ HTML::image('assets/uploads/ranks/ds9/'.$ship->co->rank->image) }}</td><td>{{ $ship->co->rank->name ." ". $ship->co->name }}</td><td colspan='2' style='color:#f30; text-align:center;'>No XO has been assigned yet.</td></tr>
		@else ($ship->commanding_officer != NULL && $ship->executive_officer == NULL)
			<tr><td colspan='2' width='50%' align='center'>Commanding Officer</td><td colspan='2' align='center'>Executive Officer</td></tr>
			<tr><td>{{ HTML::image('assets/uploads/ranks/ds9/'.$ship->co->rank->image) }}</td><td>{{ $ship->co->rank->name ." ". $ship->co->name }}</td><td>{{ HTML::image('assets/uploads/ranks/ds9/'.$ship->xo->rank->image) }}</td><td>{{ $ship->xo->rank->name ." ". $ship->xo->name }}</td></tr>
		@endif
	</table>
	<br />
		<center>{{ $ship->intro }}</center>
	<br />
	<hr>
	<br />

@endforeach

@endif

@stop