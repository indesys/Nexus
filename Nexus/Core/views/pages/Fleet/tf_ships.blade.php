@extends('layouts.master')

@section('title')
	Task Force Ship Listing
@stop

@section('body')
	@if ($tf)
		<h1>{{ $tf->name ." - ". $tf->alias }} <small>Ship Listing</small></h1>

		<div class="data-table data-table-striped data-table-bordered">
		@foreach ($tf->ships as $ship)
			{{ View::make('partials.ship')->with('ship', $ship) }}
		@endforeach
		</div>
	@else
		<h1 class="text-danger">Error!</h1>

		{{ View::make('partials.alert')->with('type', 'danger')->with('content', "No task force found! Please go back and click a valid link.") }}
	@endif
@stop
