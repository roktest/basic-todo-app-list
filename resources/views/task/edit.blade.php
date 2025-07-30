@extends('commonLayouts.app')

@section('style')
    <style>
        .error {
            color: red;
            font-size: 0.8rem;
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
    <h1>ToDo List App - Edit Task</h1>
@endsection

@section('content')
    <form action="{{ route('task.update', ['id' => $task->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" value="{{ old('title', $task->title) }}" required >
            @error('title')
                <div class="error">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <label for="description">Description:</label><br>
            <textarea id="description" name="description" rows="3" required>{{ old('description', $task->description) }}</textarea>
            @error('description')
                <div class="error">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <label for="long_description">Long Description:</label><br>
            <textarea id="long_description" name="long_description" rows="10">{{ old('long_description', $task->long_description) }}</textarea>
            @error('long_description')
                <div class="error">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <button type="submit">Update Task</button>
        </div>
    </form>
    <br><br>
    <button type="button">
        <a href="{{ route('main') }}">Back to task list</a>
    </button>
@endsection
