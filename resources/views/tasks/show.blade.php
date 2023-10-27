@extends('layouts.app')

@section('meta_title', $task->title)

@section('title', $task->title)

@section('title_side')
<a class="btn-primary" href="{{ route('tasks.index') }}">All Tasks</a>    
@endsection

@section('content')

    <p>{{ $task->description }}</p>

    @if ($task->full_description)
        <p>{{ $task->full_description }}</p>
    @endif

    <div class="flex my-6 text-gray-600 gap-4">
        <div>Created: {{ $task->created_at->format('d.m.Y') }}</div>
        <div> | </div>
        <div>Updated: {{ $task->updated_at->format('d.m.Y') }}</div>
    </div>
 

    <div style="margin: 12px 0">
        Status: 
        <span @class(['text-red-500' => !$task->completed, 'text-green-500' => $task->completed]) >
            {{ $task->completed ? 'Completed' : 'Not Completed' }}
        </span>
    </div>

    <div class="flex gap-4">
        <form action="{{ route('tasks.status', $task) }}" method="POST">
            @csrf
            @method('PUT')
            <button class="btn-secondary" type="submit"> Mark as {{ $task->completed ? 'Not Completed' : 'Completed' }}</button>
        </form>
    
        <a class="btn-secondary" href="{{ route('tasks.edit', $task) }}">Edit</a>
    
        <form method="POST" action="{{ route('tasks.destroy', $task) }}">
            @csrf
            @method('DELETE')
            <div>
                <button class="btn-secondary" type="submit">Delete</button>
            </div>
        </form>
    </div>

@endsection
