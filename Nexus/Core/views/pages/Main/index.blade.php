@extends('layouts.master')

@section('title')

Main Page

@stop



@section('body')

<p class='quote'>&quot;As your mentor Captain Spock is fond of saying - I like to think there always are possibilities.&quot;</p>
<p class='quote_info'>--<strong>Captain James T. Kirk</strong>&nbsp;&nbsp;Star Trek VI: The Undiscovered Country</p>

<p>{{ nl2br($messages->introduction) }}</p>

<h2>{{ $setting->fleet_name }}</h2>
<p>{{ nl2br($messages->message) }}</p>

@stop