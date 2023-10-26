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

@endsection