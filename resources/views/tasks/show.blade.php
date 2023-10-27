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

    <form method="POST" action="{{ route('tasks.destroy', $task->id) }}">
        @csrf
        @method('DELETE')
        <div style="margin-top:10px">
            <button type="submit">Delete</button>
        </div>
    </form>

@endsection
