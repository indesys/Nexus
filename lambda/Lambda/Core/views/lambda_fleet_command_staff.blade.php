@extends('layouts.master')

@section('body')

<h1>Command Staff</h1>

<p>This page features the senior command personnel of the fleet.  Positions listed in <span style='color:#29c;'>blue</span>, are fleet council positions.</p>

<table class='table100'>
@foreach ($departments as $dept)
    <tr><td colspan='4'><h2>{{ $dept->dept_name }}</h2></td></tr>
		@foreach ($dept->positions as $position)
        	<tr><td>
        		@if ($position->position_is_council == 1)
        			<span style='color:#29c;'>{{ $position->position_name }}</span>
        		@else
        			&nbsp;&nbsp;&nbsp;{{ $position->position_name }}
        		@endif</td>
        		@foreach ($position->characters as $character)
        			<td width='150px'>{{ HTML::image('assets/uploads/ranks/ds9/'.$character->rank->rank_image) }}</td><td>{{ $character->rank->rank_name ." ". $character->char_first_name ." ". $character->char_last_name }}</td>
        		@endforeach
        	</tr>
    	@endforeach
    
@endforeach
</table>

@stop