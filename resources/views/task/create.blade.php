@extends('commonLayouts.app')

@section('title')
    <h1>Create a new task</h1>
@endsection

@section('content')
    <div>
        {{
        // This section is for displaying any messages or errors
            $errors
        }}
    </div>
    <form action="{{ route('task.store') }}" method="POST">
        @csrf
        <!-- CSRF cross site request forgery token for security -->
        <div>
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" rows="5" required>
        </div>
        <div>
            <label for="description">Description:</label><br>
            <textarea id="description" name="description" rows="3" required></textarea>
        </div>
        <div>
            <label for="long_description">Description:</label><br>
            <textarea id="long_description" name="long_description" rows="10" required></textarea>
        </div>
        <div>
            <button type="submit">Create Task</button>
        </div>
    </form>
    <button type="button">
        <a href="{{ route('main') }}">Back to task list</a>
    </button>
@endsection