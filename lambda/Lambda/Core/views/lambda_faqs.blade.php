@extends('layouts.master')

@section('body')

<h1>Frequently Asked Questions</h1>

<p>{{ nl2br($messages->faqs) }}</p>

@stop