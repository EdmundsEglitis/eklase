<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Lessons</title>
    <!-- Add your CSS links here -->
</head>
<body>
@include('header')
    <h1>Group Lessons for {{ $groupId }}</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Lesson</th>
                <th>Plan</th>
                <th>Homework</th>
                <th>Day</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lessons as $lesson)
            <tr>
                <td>{{ $lesson->id }}</td>
                <td>{{ $lesson->lesson }}</td>
                <td>{{ $lesson->plan }}</td>
                <td>{{ $lesson->homework }}</td>
                <td><a href="/update-group/{{ $lesson->group_id }}/{{ $lesson->day }}">{{ $lesson->day }}</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>