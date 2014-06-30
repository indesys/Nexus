@extends('layouts.master')

@section('body')

<h1>About {{ $setting->fleet_name }}</h1>

<p>{{ nl2br($messages->fleet_message) }}</p>

<h2>{{ $setting->fleet_name }}'s History</h2>

<p>{{ nl2br($messages->fleet_history) }}</p>

@stop