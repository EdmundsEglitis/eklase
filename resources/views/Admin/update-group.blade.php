
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Lessons</title>
    <link href="/css/create.css" rel="stylesheet"/>
</head>
<body>
@include('header')
<br>
<br>
<br>
<br>

    <h1>Labot stundas priekš grupas: {{ $groupId }} - dienas: {{ $day }}</h1>
    <form action="/update-group" method="post">
        @csrf
        @foreach($lessons as $lesson)
        <div class="lesson">
            <input type="hidden" name="lesson_id[]" value="{{ $lesson->id }}">
            <label for="lesson_{{ $lesson->id }}">Stunda:</label>
            <input type="text" id="lesson_{{ $lesson->id }}" name="lessons[{{ $lesson->id }}][lesson]" value="{{ $lesson->lesson }}" required><br><br>

            <label for="plan_{{ $lesson->id }}">Plānots:</label>
            <textarea id="plan_{{ $lesson->id }}" name="lessons[{{ $lesson->id }}][plan]" required>{{ $lesson->plan }}</textarea><br><br>

            <label for="homework_{{ $lesson->id }}">Uzdots:</label>
            <input type="text" id="homework_{{ $lesson->id }}" name="lessons[{{ $lesson->id }}][homework]" value="{{ $lesson->homework }}" required><br><br>
            </div>
        @endforeach

        <button type="submit">Labot stundu sarakstu</button>
    </form>
</body>
</html>