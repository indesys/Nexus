@extends('layouts.master')

@section('title')

FAQ's

@stop



@section('body')

<h1>Frequently Asked Questions</h1>

<p>{{ nl2br($messages->faqs) }}</p>

@stop