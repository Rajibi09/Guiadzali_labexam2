<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <h3>Edit Task</h3>
    <form method="POST" action="{{ route('tasks.update', $task->id) }}">

    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="{{ $task->title }}" required>
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control" required>{{ $task->description }}</textarea>
    </div>

    <div class="form-check mb-3">
        <input type="checkbox" name="is_completed" class="form-check-input" id="is_completed" {{ $task->is_completed ? 'checked' : '' }}>
        <label class="form-check-label" for="is_completed">Completed</label>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
    
</body>
</html>