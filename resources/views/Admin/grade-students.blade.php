<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/css/gradding.css" rel="stylesheet"/>
</head>
<body>
@include('header')
<br>
<br><br><br>
<div class="center-all">
    <div class="form-container">
    <form action="/grade-students" method="get">
    <label for="group-id">izvēlies grupu:</label>
        <select name="group-id" id="group-id" required>
        <option value=""></option>
            <option value="ipb22">ipb22</option>
            <option value="ipa22">ipa22</option>
            <option value="kd22">kd22</option>
            <option value="da22">da22</option>
        </select><br><br>
        <label for="lesson_id">izvēlies priekšmetu:</label>
        <select name="lesson_id" id="lesson_id" required>
        <option value=""> </option>
            <option value="0">sistemu programmēšana</option>
            <option value="1">matemaātika</option>
            <option value="2">angļu valoda</option>
            <option value="3">latviešu valoda</option>
        </select><br><br>

        <button type="submit">atvērt vērtēšanas sarakstu</button>
    </form>
    </div>
    <div class="table-container">
    @isset($usersAttributes)
    <form action="/save-grades" method="POST">
    @csrf

        <table>
            <thead>
                <tr>
                    <th>student</th>
                    <th>subject</th>
                    <th>grade</th>
                </tr>
            </thead>
        <tbody>

        @foreach($usersAttributes as $userAttribute)
            <tr>
                <td> {{ $userAttribute["name"] }} </td>
                <td> {{ $lessonId }}</td>
                <label for="grade{{$userAttribute["id"]}}"></label>
                <td> <input id="grade{{$userAttribute["id"]}}" type="number" name="grade{{$userAttribute["id"]}}" min="0" max="10" step="1" required></td>

                
                <label for="lesson_id"></label>
                <input id="lesson_id" type="hidden" name="lesson_id" value="{{$lessonName["id"]}}">

                <label for="group_id"></label>
                <input id="group_id" type="hidden" name="group_id" value="{{$groupId}}">
            </tr>
        @endforeach
        </tbody>
    </table>
    <button type="submit">Saglabāt skolēnu atzīmes</button>
    </div>
    </div>
    @endisset


</body>
</html>