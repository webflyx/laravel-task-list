@section('meta_title', isset($task) ? 'Edit Task' : 'Add task')

@section('title', isset($task) ? 'Edit Task' : 'Add task' )

@section('content')

    <form action="{{ isset($task) ? route('tasks.update', $task->id) : route('tasks.store') }}" method="POST">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset

        <div>
            <label for="title">Title</label>
            <input @class(['border-red-400'=>$errors->has('title')]) type="text" name="title" value="{{ $task->title ?? old('title') }}">
            @error('title')
                <div class="error-msg">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <input @class(['border-red-400'=>$errors->has('description')]) type="text" name="description" value="{{ $task->description ?? old('description') }}">
            @error('description')
                <div class="error-msg">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="full_description">Full Description</label>
            <textarea @class(['border-red-400'=>$errors->has('full_description')]) name="full_description" rows="10">{{ $task->full_description ?? old('full_description') }}</textarea>
            @error('full_description')
                <div class="error-msg">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex gap-4 mt-6">
            <button class="btn-primary" type="submit">{{ isset($task) ? 'Edit Task' : 'Add Task' }}</button>
            <a class="btn-secondary" href="{{ route('tasks.index') }}" class="block">Close</a>
        </div>

    </form>

@endsection