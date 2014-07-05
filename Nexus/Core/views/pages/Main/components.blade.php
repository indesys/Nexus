@extends('layouts.master')

@section('title')
    Components
@stop

@section('body')
    <h1>Bootstrap Components</h1>

    <h2>Alerts</h2>

    {{ View::make('partials.alert')->with('type', 'danger')->with('content', "Danger alert") }}
    {{ View::make('partials.alert')->with('type', 'warning')->with('content', "Warning alert") }}
    {{ View::make('partials.alert')->with('type', 'success')->with('content', "Success alert") }}
    {{ View::make('partials.alert')->with('type', 'info')->with('content', "Info alert") }}

    <h2>Labels &amp; Badges</h2>

    {{ View::make('partials.label')->with('type', 'danger')->with('content', "Danger") }}
    {{ View::make('partials.label')->with('type', 'warning')->with('content', "Warning") }}
    {{ View::make('partials.label')->with('type', 'success')->with('content', "Success") }}
    {{ View::make('partials.label')->with('type', 'info')->with('content', "Info") }}
    {{ View::make('partials.label')->with('type', 'default')->with('content', "Default") }}

    <br>

    {{ View::make('partials.badge')->with('content', "25") }}

    <h2>Buttons</h2>

    {{ View::make('partials.button')->with('content', "Default")->with('options', []) }}
    {{ View::make('partials.button')->with('content', "Primary")->with('options', ['class' => 'btn btn-primary']) }}
    {{ View::make('partials.button')->with('content', "Danger")->with('options', ['class' => 'btn btn-danger']) }}
    {{ View::make('partials.button')->with('content', "Warning")->with('options', ['class' => 'btn btn-warning']) }}
    {{ View::make('partials.button')->with('content', "Info")->with('options', ['class' => 'btn btn-info']) }}
    {{ View::make('partials.button')->with('content', "Success")->with('options', ['class' => 'btn btn-success']) }}

    <h2>Text</h2>

    <p class="text-info">Info text</p>
    <p class="text-warning">Warning text</p>
    <p class="text-danger">Danger text</p>
    <p class="text-success">Success text</p>
@stop
