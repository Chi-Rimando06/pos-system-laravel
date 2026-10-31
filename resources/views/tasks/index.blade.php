<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Tasks</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>My Tasks</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Task Title</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tasks as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->title }}</td>
                <td>{{ ucfirst($task->status) }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="3">No tasks found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>