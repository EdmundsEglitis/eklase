<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/css/dashboard.css" rel="stylesheet"/>
</head>
<body>

    @if(Auth::check())
    @include('header')

    @if($user->admin == 1)
    <div class="admin-dash">
        <div id="create-lessons">Veidot stundu sarakstu</div>
        <div id="delete-lessons">Dzest stundu sarakstu</div>
        <div id="gradding">Izlikt aztīmes</div>
        <div id="view-lessons">view all lessons</div>
    </div>
    @else
    <div class="student-dash">
        <div id="student-lessons">Skatīt stundu sarakstu</div>
        <div id="student-grades">Skatīt vērtējumus</div>
    </div>
    <h1>Welcome to Your Class Dashboard</h1>
    
    <h2>Week Lessons for {{ Auth::user()->group_name }}</h2>
    <table>
        <thead>
            <tr>
                <th>Lesson</th>
                <th>Day</th>
                <th>Plan</th>
                <th>Homework</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($groupLessons as $lesson)
            <tr>
                <td>{{ $lesson->lesson }}</td>
                <td>{{ $lesson->day }}</td>
                <td>{{ $lesson->plan }}</td>
                <td>{{ $lesson->homework }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
    @endif

<script src="{{ asset('js/bklase.js') }}"></script>
</body>
</html>