@extends('commonLayouts.app')

@section('style')
    <style>
        .error {
            color: red;
            font-size: 0, 8rem;
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
            padding: 0.5rem;
            border: 1px solid red;
            background-color: #ffebee;
            border-radius: 5px;
            width: fit-content;
        }
        .success {
            color: blue;
            font-size: 0.8rem;
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
            padding: 0.5rem;
            border: 1px solid blue;
            background-color: #e0f7fa;
            border-radius: 5px;
            width: fit-content;
        }
    </style>
@endsection

@section('title')
    <h1>ToDo List App - Task details</h1>
    <h2>Task ID #{{$task->id}}, {{$task->title}}</h2>
@endsection

@section('content')
    <h3>Description</h3>
    <p>{{$task->description}}</p>
    @if($task->long_description)
    <h3>Long description</h3>
        <p>{{$task->long_description}}</p> 
    @endif
    <small><b>Status</b> {{$task->completed ? 'Completed' : 'Not completed'}}</small>
    <br>
    <small><b>Created at</b> {{$task->created_at}}</small>
    <br>
    <small><b>Updated at</b> {{$task->updated_at}}</small>
    <br><br>
    <button type="button">
        <a href="{{ route('task.edit', ['id' => $task->id]) }}">Edit Task</a>
    </button>
    <br><br>
    <button type="button">
        <a href="{{ route('main') }}">Back to task list</a>
    </button>
@endsection