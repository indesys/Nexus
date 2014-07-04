@extends('layouts.master')

@section('title')
    Home
@stop

@section('body')
    <blockquote>
        As your mentor Captain Spock is fond of saying - I like to think there always are possibilities.
        <footer>Captain James T. Kirk</footer>
    </blockquote>

    <p>{{ nl2br($messages->introduction) }}</p>

    <h2>{{ $setting->fleet_name }}</h2>
    <p>{{ nl2br($messages->message) }}</p>
@stop
