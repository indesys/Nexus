@extends('layouts.master')

@section('title')

Command Staff Listing

@stop



@section('body')

<h1>Command Staff</h1>

<p>This page features the senior command personnel of the fleet.  Positions listed in <span style='color:#29c;'>blue</span>, are fleet council positions.</p>

<table class='table100'>
@foreach ($departments as $dept)
    <tr><td colspan='4'><h2>{{ $dept->name }}</h2></td></tr>
		@foreach ($dept->positions as $position)
        	<tr><td>
        		@if ($position->admin == 1)
        			<span style='color:#29c;'>{{ $position->name }}</span>
        		@else
        			&nbsp;&nbsp;&nbsp;{{ $position->name }}
        		@endif</td>
        		@foreach ($position->characters as $character)
        			@if ($character->character_id === false)
                        <td width='150px'>&nbsp;</td><td>Position Open</td>
                    @else
                        <td width='150px'>{{ HTML::image('assets/uploads/ranks/ds9/'.$character->rank->image) }}</td><td>{{ $character->rank->name ." ". $character->name }}</td>
                    @endif
        		@endforeach
        	</tr>
    	@endforeach
    
@endforeach
</table>

@stop