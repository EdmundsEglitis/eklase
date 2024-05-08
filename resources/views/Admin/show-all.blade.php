<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Lessons</title>
    <link href="/css/showAll.css" rel="stylesheet"/>
</head>
<body>
@include('header')
    <h1>All Lessons</h1>
    <div class="table-container">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Lesson</th>
                <th>Plan</th>
                <th>Homework</th>
                <th>Group ID</th>
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
                <td> <a href="/view/{{ $lesson->group_id }}">{{ $lesson->group_id }}</a></td>
                <td>{{ $lesson->day }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>