@extends('layouts.master')

@section('title')
	Fleet News Service
@stop

@section('body')
	<h1>Fleet News Service</h1>
	<p>This page serves as the main point of call for all fleet news.  This list is also limited to the past 10 items.</p>

	@foreach ($news_items as $news)
		<h3>{{ $news->title }}</h3>
		<p>{{ nl2br($news->content) }}</p>
		<p class="text-muted text-small">Posted under <strong>{{ $news->category->name }}</strong> on {{ $news->posted->format('F j, Y @ Hi') }} hours</p>
	    <hr>
	@endforeach
@stop
