
@extends('layouts.app')

@section('title', 'Tasks Lists')

@section('content')
<nav class="mb-4">
    <a href="{{ route('tasks.create') }}"
    class="font-medium text-gray-700 underline decoration-pink-500">
        Add Task
    </a>
</nav>

    @if (count($tasks))
        @foreach ($tasks as $task)
            <div>
                <a href="{{ route('tasks.show', ['task' => $task->id]) }}"
                    @class(['font-bold','line-through' => $task->completed])>
                    {{ $task->title }}
                </a>
            </div>
        @endforeach
        <nav class="mt-4">{{ $tasks->links() }}</nav>
    @else
        <div>There are no tasks</div>
    @endif
@endsection
