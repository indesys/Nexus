@extends('layouts.master')

@section('title')
    Command Staff Listing
@stop

@section('body')
    <h1>Command Staff</h1>

    <p>This page features the senior command personnel of the fleet.  Positions listed in <span class="text-highlight">blue</span>, are fleet council positions.</p>

    @foreach ($departments as $dept)
        <h2>{{ $dept->name }}</h2>

        <div class="data-table data-table-bordered data-table-striped">
    	@foreach ($dept->positions as $position)
            @if ($position->characters->count() > 0)
                @foreach ($position->characters as $character)
                    <div class="row">
                        <div class="col-sm-5 col-lg-5">
                            <?php $class = ((bool) $position->admin) ? ' class="text-highlight"' : '';?>
                            <p{{ $class }}>{{ $position->name }}</p>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-6 col-lg-3">
                            <p>{{ HTML::image('assets/uploads/ranks/ds9/'.$character->rank->image) }}</p>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                            <p>{{ $character->rank->name ." ". $character->name }}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="row">
                    <div class="col-sm-5 col-lg-5">
                        <?php $class = ((bool) $position->admin) ? ' class="text-highlight"' : '';?>
                        <p{{ $class }}>{{ $position->name }}</p>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-6 col-lg-3">
                        <p>{{ HTML::image('assets/uploads/ranks/ds9/b-blank1.png') }}</p>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                        <p>Position Open</p>
                    </div>
                </div>
            @endif
        @endforeach
        </div>
    @endforeach
@stop
