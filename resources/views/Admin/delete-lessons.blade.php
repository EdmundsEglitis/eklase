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
    <form action="/delete-lessons" method="POST">
        @csrf
        <label for="group_id">Group ID:</label>
        <select name="group_id" id="group_id" required>
            <option value="ipb22">ipb22</option>
            <option value="ipa22">ipb22</option>
            <option value="kd22">kd22</option>
            <option value="da22">da22</option>
        </select><br><br>
        <button type="submit">Delete Lessons</button>
    </form>
</body>
</html>