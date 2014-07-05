@extends('layouts.master')

@section('title')

Command Staff Listing

@stop



@section('body')

<h1>Command Staff</h1>

<p>This page features the senior command personnel of the fleet.  Positions listed in <span style='color:#29c;'>blue</span>, are fleet council positions.</p>


<div class="data-table"><div class="row"><br />
@foreach ($departments as $dept)
    <div class="col-xs-12"><h2>{{ $dept->name }}</h2></div>
        
    	@foreach ($dept->positions as $position) 
        @foreach ($position->characters as $character)
    
        
            @if ($position->admin == 1)
            	<div class="col-xs-5"><span style='color:#29c;'>{{ $position->name }}</span></div>
                      <div class="col-xs-3">{{ HTML::image('assets/uploads/ranks/ds9/'.$character->rank->image) }}</div>
                      <div class="col-xs-4">{{ $character->rank->name ." ". $character->name }}</div>
            @elseif ($position->admin != 1 && $character)
            	<div class="col-xs-5">&nbsp;&nbsp;&nbsp;{{ $position->name }}</div>
                      <div class="col-xs-3">{{ HTML::image('assets/uploads/ranks/ds9/'.$character->rank->image) }}</div>
                      <div class="col-xs-4">{{ $character->rank->name ." ". $character->name }}</div>
            @elseif ($position->admin == 1 && !$character)
                <div class="col-xs-5">&nbsp;&nbsp;&nbsp;{{ $position->name }}</div>
                      <div class="col-xs-7">Position Open</div>
            @endif
        @endforeach
        @endforeach
@endforeach
</div></div>

@stop