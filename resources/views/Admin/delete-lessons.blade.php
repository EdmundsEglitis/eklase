<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/css/delete.css" rel="stylesheet"/>
</head>
<body>
    <br>
    <br>
    <br>
<h2>Dzēst stundu sarakstu grupai</h2>
@include('header')
@if(session('success'))
    <div class="center-all">
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
</div>
</div>

    <script src="{{ asset('js/delete.js') }}"></script>
</body>
</html>