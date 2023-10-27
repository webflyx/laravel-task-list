@extends('layouts.app')

@section('meta_title', 'All Tasks')

@section('title', 'All Tasks')

@section('content')
    
    @forelse ( $tasks as $task )
        <div>
            <a href="{{ route('tasks.show', $task->id) }}">{{ $task->title }}</a>
        </div>
    @empty
        <div>Tasks not find.</div>
    @endforelse 

    @if ($tasks->count())
        <div>
            <nav>
                {{ $tasks->links() }}
            </nav>
        </div>
    @endif
    

@endsection