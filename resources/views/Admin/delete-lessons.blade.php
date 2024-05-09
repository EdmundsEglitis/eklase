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
    @include('header')
    <div class="center-all">
<h2>Dzēst stundu sarakstu grupai</h2>
@if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif
    <div class="delete">
    <form action="/delete-lessons" method="POST" onsubmit="return confirmDelete()">
        @csrf
        <label for="group_id">Grupas ID:</label>
        <select name="group_id" id="group_id" required>
            <option value="ipb22">ipb22</option>
            <option value="ipa22">ipb22</option>
            <option value="kd22">kd22</option>
            <option value="da22">da22</option>
        </select><br><br>
        <button type="submit">Delete Lessons</button>
    </form>
    </div>



    <script src="{{ asset('js/delete.js') }}"></script>
</body>
</html>