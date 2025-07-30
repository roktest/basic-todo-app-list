@extends('commonLayouts.app')

@section('title')
    <h1>ToDo List App - Main</h1>
@endsection

@section('content')
    <div>
        <hr>
        <h2>Control Panel</h2>
        <button type="button">
            <a href="{{ route('task.create') }}">Create New Task</a>
        </button>
        <hr>
    </div>
    
    @if (empty($tasks))
        <p>GREAT JOB!! We are all done, no tasks available at the moment!</p>
    @else
        @foreach ($tasks as $task)
            <div>
                <h2>ID #{{ $task->id }} - {{ $task->title }}</h2>
                @if ($task->completed)
                    <p>Status: Completed</p>
                @else
                    <p>Status: Not completed</p>
                @endif
                <button type="button">
                    <a href="{{ route('task.show', [ 'id' => $task->id ]) }}">Task details</a>
                </button>
                

            </div>
        @endforeach
    @endif
@endsection