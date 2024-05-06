<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Delete Lessons by Group ID</h1>
@include('header')
@if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif
    <form action="/delete-lessons" method="POST" onsubmit="return confirmDelete()">
        @csrf
        <label for="group_id">Group ID:</label>
        <input type="text" id="group_id" name="group_id" required><br><br>
        <button type="submit">Delete Lessons</button>
    </form>

    <script src="{{ asset('js/delete.js') }}"></script>
</body>
</html>