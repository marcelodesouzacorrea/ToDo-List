@extends('layouts.app')

@section('content')
    <a href="/" class="btn btn-primary">Voltar</a>
    <h1>Tarefa</h1>
    @if(count($todo) > 0)
        <div class="card">
            <div class="card-body">
                <h1>{{$todo->text}}</h1>
                <span class="badge badge-danger">{{$todo->due}}</span>
                <p>{{$todo->body}}</p>
                <div class="row">
                    <a href="/todo/{{$todo->id}}/edit" class="btn btn-warning mr-3">Atualizar</a>
                    {!! Form::open(['action' => ['ToDoController@destroy', $todo->id], 'method' => 'post']) !!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    @endif
@endsection
