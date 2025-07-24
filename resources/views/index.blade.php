<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
</head>
<body>
    <div>
        <h1>Tasks</h1>
        @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', [
            'id' => $task->id
            ])}}">{{$task->title}}</a>
        </div>
        @empty
        <h3>There's no tasks!</h3>
        @endforelse
    </div>
</body>
</html>
