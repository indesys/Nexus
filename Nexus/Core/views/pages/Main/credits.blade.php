@extends('layouts.master')

@section('title')

Site Credits

@stop



@section('body')

<h1>Site Credits</h1>

<p>{{ nl2br($messages->credits_perm) }}</p>
<hr>
<p>{{ nl2br($messages->credits) }}</p>

@stop