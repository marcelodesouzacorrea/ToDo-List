@extends('layouts.app')

@section('content')
    <h1>Criar Tarefa</h1>
    {!! Form::open(['action' => 'ToDoController@store', 'method' => 'post']) !!}
        {{ Form::bsText('text') }}
        {{ Form::bsTextArea('body') }}
        {{ Form::bsText('due') }}
        {{ Form::bsSubmit('Create', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection
