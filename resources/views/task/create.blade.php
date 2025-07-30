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
            padding: 0.3rem;
            border: 1px solid blue;
            background-color: #e0f7fa;
            border-radius: 5px;
            width: fit-content;
        }
    </style>
@endsection

@section('title')
    <h1>ToDo List App - Create a new task</h1>
@endsection

@section('content')
    <form action="{{ route('task.store') }}" method="POST">
        @csrf
        <!-- CSRF cross site request forgery token for security -->
        <div>
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" rows="5" required>
            @error('title')
                <div class="error">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <label for="description">Description:</label><br>
            <textarea id="description" name="description" rows="3" required></textarea>
            @error('description')
                <div class="error">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <label for="long_description">Description:</label><br>
            <textarea id="long_description" name="long_description" rows="10" required></textarea>
            @error('long_description')
                <div class="error">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <button type="submit">Create Task</button>
        </div>
    </form>
    <br>
    <button type="button">
        <a href="{{ route('main') }}">Back to task list</a>
    </button>
@endsection