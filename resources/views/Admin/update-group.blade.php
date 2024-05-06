
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Lessons</title>
    <!-- Add your CSS links here -->
</head>
<body>
@include('header')
    <h1>Edit Lessons for Group: {{ $groupId }} - Day: {{ $day }}</h1>
    <form action="/update-group" method="post">
        @csrf
        @foreach($lessons as $lesson)
            <input type="hidden" name="lesson_id[]" value="{{ $lesson->id }}">
            <label for="lesson_{{ $lesson->id }}">Lesson:</label>
            <input type="text" id="lesson_{{ $lesson->id }}" name="lessons[{{ $lesson->id }}][lesson]" value="{{ $lesson->lesson }}" required><br><br>

            <label for="plan_{{ $lesson->id }}">Plan:</label>
            <textarea id="plan_{{ $lesson->id }}" name="lessons[{{ $lesson->id }}][plan]" required>{{ $lesson->plan }}</textarea><br><br>

            <label for="homework_{{ $lesson->id }}">Homework:</label>
            <input type="text" id="homework_{{ $lesson->id }}" name="lessons[{{ $lesson->id }}][homework]" value="{{ $lesson->homework }}" required><br><br>
        @endforeach

        <button type="submit">Update Lessons</button>
    </form>
</body>
</html>