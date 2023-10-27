@extends('layouts.app')

@section('meta_title', 'Create Task')

@section('title', 'Create Task')

@section('content')

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ old('title') }}">
            @error('title')
                <div class="error-msg">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" value="{{ old('description') }}">
            @error('description')
                <div class="error-msg">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="full_description">Full Description</label>
            <textarea name="full_description" rows="10">{{ old('full_description') }}</textarea>
            @error('full_description')
                <div class="error-msg">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button type="submit">Create Task</button>
        </div>
    </form>

@endsection
