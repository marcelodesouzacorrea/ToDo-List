@extends('layouts.app')

@section('content')
    <h1>Tarefas</h1>
    @if(count($todos) > 0)
        @foreach($todos as $todo)
            <div class="card">
                <div class="card-body">
                    <h1><a href="todo/{{$todo->id}}">{{$todo->text}}</a> <span class="badge badge-danger">{{$todo->due}}</span></h1>
                </div>
            </div>
        @endforeach
    @endif
@endsection
