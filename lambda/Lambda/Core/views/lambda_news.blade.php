@extends('layouts.master')

@section('body')

<h1>Fleet News Service</h1>

@foreach ($news_items as $news)
	<table class="table100">
    	<tr><td width="50%"><h2>{{ $news->news_title }}</h2></td><td align="right"><span style="font-size:0.8em;">Posted under <strong>{{ $news->news_cat_name }}</strong> on <strong>{{ $news->news_posted->format('F j, Y @ Hi') }} hours</strong></span></td></tr>
        <tr><td colspan="2">{{ nl2br($news->news_content) }}</td></tr>
    </table>
    <hr>
@endforeach

@stop