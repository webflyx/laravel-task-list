@extends('layouts.app')

@section('meta_title', 'Edit Task')

@section('title', 'Edit Task')

@section('content')

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ $task->title }}">
            @error('title')
                <div class="error-msg">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" value="{{ $task->description }}">
            @error('description')
                <div class="error-msg">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="full_description">Full Description</label>
            <textarea name="full_description" rows="10" >{{ $task->full_description }}</textarea>
            @error('full_description')
                <div class="error-msg">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button type="submit">Update Task</button>
        </div>
    </form>

@endsection
