@extends('layouts.app')

@section('content')
    <a href="/todo/{{$todo->id}}" class="btn btn-primary">Voltar</a>
    <h1>Atualizar</h1>
    {!! Form::open(['action' => ['ToDoController@update', $todo->id], 'method' => 'post']) !!}
        {{ Form::bsText('text', $todo->text) }}
        {{ Form::bsTextArea('body', $todo->body) }}
        {{ Form::bsText('due', $todo->due) }}
        {{Form::hidden('_method', 'PUT')}}
        {{ Form::bsSubmit('Update', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection
