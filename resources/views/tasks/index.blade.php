<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

 
        <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Create Task</a>

       
        <div class="alert alert-success">{{ session('success') }}</div>
      

        <table class="table">
            <thead>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
</thead>
    <tbody>
        
    <tr>
        <td>{{ $task->title }}</td>
        <td>{{ $task->description }}</td>
        <td>
    
        <span class="badge bg-success">Completed</span>
   
        <span class="badge bg-warning text-dark">Pending</span>
   
            </td>
            <td>
    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-info">Edit</a>
    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
    
    <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this task?')">Delete</button>
    </form>
    </td>
    </tr>
    <tr><td colspan="4">No tasks found.</td></tr> 
    </tbody>
    </table>


</body>
</html>