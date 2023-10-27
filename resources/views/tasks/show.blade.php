@extends('layouts.app')

@section('meta_title', $task->title)

@section('title', $task->title)

@section('content')

    <p>{{ $task->description }}</p>

    @if ($task->full_description)
        <p>{{ $task->full_description }}</p>
    @endif

    <div>{{ $task->created_at }}</div>
    <div>{{ $task->updated_at }}</div>

    <div style="margin: 12px 0">
        Status: {{ $task->completed ? 'Completed' : 'Not Completed' }}
    </div>

    <form action="{{ route('tasks.status', $task) }}" method="POST">
        @csrf
        @method('PUT')
        <button type="submit"> Mark as {{ $task->completed ? 'Not Completed' : 'Completed' }}</button>
    </form>

    <div style="margin: 12px 0;">
        <a href="{{ route('tasks.edit', $task) }}">Edit</a>
    </div>

    <form method="POST" action="{{ route('tasks.destroy', $task) }}">
        @csrf
        @method('DELETE')
        <div style="margin-top:10px">
            <button type="submit">Delete</button>
        </div>
    </form>

@endsection
