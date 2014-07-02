@extends('layouts.master')

@section('title')

About Us

@stop



@section('body')

<h1>About {{ $setting->fleet_name }}</h1>

<p>{{ nl2br($messages->message) }}</p>

<h2>{{ $setting->fleet_name }}'s History</h2>

<p>{{ nl2br($messages->history) }}</p>

@stop