@extends('layouts.master')

@section('title')

Fleet News Service

@stop



@section('body')

<h1>Fleet News Service</h1>

<p>This page serves as the main point of call for all fleet news.  This list is also limited to the past 10 items.</p>

@foreach ($news_items as $news)
	<table class="table100">
    	<tr><td width="50%"><h2>{{ $news->news_title }}</h2></td><td align="right"><span style="font-size:0.8em;">Posted under <strong>{{ $news->news_cat_name }}</strong> on <strong>{{ $news->news_posted->format('F j, Y @ Hi') }} hours</strong></span></td></tr>
        <tr><td colspan="2">{{ nl2br($news->news_content) }}</td></tr>
    </table>
    <hr>
@endforeach

@stop