@extends('layouts.app')

@section('meta_title', 'Create Task')

@section('title', 'Create Task')

@section('content')

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="description" name="description">
        </div>
        <div>
            <label for="full_description">Full Description</label>
            <textarea name="full_description" rows="10"></textarea>
        </div>
        <div>
            <button type="submit">Create Task</button>
        </div>
    </form>

@endsection
