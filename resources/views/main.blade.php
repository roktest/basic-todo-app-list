@extends('commonLayouts.app')

@section('title')
    <h1>ToDo List App - Main</h1>
@endsection

@section('content')
    @if (empty($tasks))
        <p>GREAT JOB!! We are all done, no tasks available at the moment!</p>
    @else
        @foreach ($tasks as $task)
            <div>
                <h2>ID #{{ $task->id }} - {{ $task->title }}</h2>
                <button type="button">
                    <a href="{{ route('taskdetails.show', [ 'id' => $task->id ]) }}">Task details</a>
                </button>
                @if ($task->completed)
                    <p>Status: Completed</p>
                @else
                    <p>Status: Not completed</p>
                @endif

            </div>
        @endforeach
    @endif
@endsection