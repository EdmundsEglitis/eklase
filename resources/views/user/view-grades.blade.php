<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Grades</title>
</head>
<body>
    <h1>jūsu sekmju izraksts</h1>

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
</body>
</html>