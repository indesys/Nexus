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
	<div class="data-table"><div class="row"><br />
		<div class="col-xs-12"><center><span style='font-size:1.3em; font-weight:bold;'>{{ HTML::link($ship->url,$ship->name) }}</span><br />
		<span class='text-small'>{{ $ship->registry }}</span></center></div>

		<div class="col-md-6 col-lg-7">{{ HTML::image('assets/uploads/ships/'.$ship->image) }}</div>

			<div class="col-md-6 col-lg-5 text-small">
				<div class="col-xs-6">Task Force</div><div class="col-xs-6">{{ $ship->taskforce->name }}</div>
				<div class="col-xs-6">Task Group</div><div class="col-xs-6">{{ $ship->taskgroup->alias }}</div>
				<div class="col-xs-6">Status:</div><div class="col-xs-6">{{ $ship->shipstatus->name }}</div>
				<div class="col-xs-6">Class:</div><div class="col-xs-6">{{ $ship->shipclass->name }}-class</div>

			@if ($ship->commanding_officer == NULL)
				<div class="col-xs-12">&nbsp;</div>
			@else
				<div class="col-xs-6">Total Crew:</div><div class="col-xs-6">{{ $ship->crew->count() }}</div>
			@endif
			
			@if ($ship->commanding_officer == NULL)
				<div class="col-xs-12">&nbsp;</div>
			@else
				<div class="col-xs-6">Simming Format:</div><div class="col-xs-6">Play by {{ $ship->format }}</div>
			@endif
			</div>
	
	<div class="col-xs-12" style="text-align:center;">&nbsp;</div>
		@if ($ship->commanding_officer == NULL)
		<div class="col-xs-12" style="text-align:center;">
			<div class="col-xs-6">
				<div class="col-xs-12" style="font-size:1.1em;"><strong>Commanding Officer</strong></div>
				<div class="col-xs-12">{{ HTML::image('assets/uploads/ranks/ds9/b-blank1.png') }}</div>
			</div>
				<div class="col-xs-6">&nbsp;</div>
				<div class="col-xs-6 text-highlight-orange">Open Command!</div>
		</div>
		@elseif ($ship->commanding_officer != NULL && $ship->executive_officer == NULL)
		<div class="col-xs-12" style="text-align:center;">
			<div class="col-xs-6" style="font-size:1.1em;"><strong>Commanding Officer</strong></div><div class="col-xs-6" style="font-size:1.1em;"><strong>Executive Officer</strong></div>
			<div class="col-xs-6">
				<div class="col-xs-12">{{ HTML::image('assets/uploads/ranks/ds9/'.$ship->co->rank->image) }}</div><div class="col-xs-12">{{ $ship->co->rank->name ." ". $ship->co->name }}</div>
			</div>
				<div class="col-xs-6 text-highlight-red">No XO has been assigned yet.</div>
		</div>
		@else ($ship->commanding_officer != NULL && $ship->executive_officer == NULL)
		<div class="col-xs-12" style="text-align:center;">
			<div class="col-xs-6" style="font-size:1.1em;"><strong>Commanding Officer</strong></div><div class="col-xs-6" style="font-size:1.1em;"><strong>Executive Officer</strong></div>
			<div class="col-xs-6">{{ HTML::image('assets/uploads/ranks/ds9/'.$ship->co->rank->image) }}</div><div class="col-xs-6">{{ HTML::image('assets/uploads/ranks/ds9/'.$ship->xo->rank->image) }}</div>
			<div class="col-xs-6">{{ $ship->co->rank->name ." ". $ship->co->name }}</div><div class="col-xs-6">{{ $ship->xo->rank->name ." ". $ship->xo->name }}</div>
		</div>
		@endif

		<div class="col-xs-12" style="text-align:center;">{{ $ship->intro }}</div>
	</div></div>


@endforeach
	
	<div class="data-table"><div class="row"><br />
		<div class="col-xs-12" style="text-align:center;">End of File... Search Complete</div>
	</div></div>

@endif

@stop