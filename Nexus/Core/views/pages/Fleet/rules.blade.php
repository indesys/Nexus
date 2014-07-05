@extends('layouts.master')

@section('title')
    Fleet Rules
@stop

@section('body')
    <h1>Fleet Rules</h1>

    <p>Below are the rules that all players must abide by while operating in or as part of the fleet. Anyone found to be in breach of these rules, may be subject to disciplinary actions.</p>

    <p>{{ $rules->rules }}</p>
@stop
