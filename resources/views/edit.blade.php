@extends('layouts.app')

@section('title', 'Edit Tasks')



@section('content')
    <form action="{{ route('tasks.update', ['task' => $task->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title">Title</label>
            <input type="text" name="title" id="title"
            @class(['border-red-500' => $errors->has('title')])
            value="{{ $task->title }}">
            @error('title')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description">Description</label>
            <textarea name="description" id="description"
            @class(['border-red-500' => $errors->has('description')])
            rows="5">{{ $task->description }}</textarea>
            @error('description')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description"
            @class(['border-red-500' => $errors->has('long_description')])
            rows="10">{{ $task->long_description }}</textarea>
            @error('long_description')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex items-center gap-2">
            <button type="submit" class="btn">
                Update Task
            </button>
            <a href="{{ route('tasks.index') }}" class="link">Cancel</a>
        </div>
    </form>
@endsection
