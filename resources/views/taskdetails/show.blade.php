@extends('commonLayouts.app')

@section('title')
    <h1>Task ID #{{$task->id}}, {{$task->title}}</h1>
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
        <a href="{{ route('main') }}">Back to task list</a>
    </button>
@endsection