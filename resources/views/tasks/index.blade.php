@extends('layouts.app')

@section('meta_title', 'All Tasks')

@section('title', 'All Tasks')

@section('title_side')
<a class="btn-primary" href="{{ route('tasks.create') }}">Create Task</a>    
@endsection

@section('content')
    
    @forelse ( $tasks as $task )
        <div class="mb-3">
            <a href="{{ route('tasks.show', $task->id) }}" @class(['hover:text-blue-800', 'line-through' => $task->completed, 'font-medium' => !$task->completed]) >
                {{ $task->title }}
            </a>
        </div>
    @empty
        <div>Tasks not find.</div>
    @endforelse 

    @if ($tasks->count())
        <div class="mt-5">
            <nav>
                {{ $tasks->links() }}
            </nav>
        </div>
    @endif
    

@endsection