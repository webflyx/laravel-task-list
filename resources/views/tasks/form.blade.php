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
            <input type="text" name="title" value="{{ $task->title ?? old('title') }}">
            @error('title')
                <div class="error-msg">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" value="{{ $task->description ?? old('description') }}">
            @error('description')
                <div class="error-msg">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="full_description">Full Description</label>
            <textarea name="full_description" rows="10">{{ $task->full_description ?? old('full_description') }}</textarea>
            @error('full_description')
                <div class="error-msg">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button type="submit">{{ isset($task) ? 'Edit Task' : 'Add Task' }}</button>
        </div>

    </form>

@endsection