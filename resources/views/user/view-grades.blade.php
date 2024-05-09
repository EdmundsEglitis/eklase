<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Grades</title>
    <link href="/css/dashboard.css" rel="stylesheet"/>
</head>
<body>
@if(Auth::check())
@include('header')
<br>
<br>
<br>
    <h2>jūsu sekmju izraksts</h2>
    <div  class="table-container">
    <table>
    <thead>
        <tr>
            <th>priekšmets</th>
            <th>aztīme</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($lessonName as $lesson)
            <tr>
                <td>{{ $lesson["lessons"] }}</td>
                @foreach ($gradeAttributes as $gradeAttribute)
                    @if ($gradeAttribute["lesson_id"] == $lesson["id"])
                        <td>{{ $gradeAttribute["grade"] }}</td>
                    @endif
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>
</div>
</body>
@endif
</html>