<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Week Plan</title>
    <link href="/css/create.css" rel="stylesheet"/>
</head>
<body>
@include('header')
<br>
<br>
<br>
    <h1>Viedot stunu sarakstu</h1>
    <form action="/create-lessons" method="POST">
        @csrf
        <label for="group_id">Grupas ID:</label>
        <select name="group_id" id="group_id" required>
            <option value="ipb22">ipb22</option>
            <option value="ipa22">ipb22</option>
            <option value="kd22">kd22</option>
            <option value="da22">da22</option>
        </select><br><br>

        <label for="day">Day:</label>
        <select name="day" id="day" required>
            <option value="Pirmiena">pirmdiena</option>
            <option value="Otriena">otriena</option>
            <option value="Trešdiena">Trešdiena</option>
            <option value="Ceturtdiena">ceturtdiena</option>
            <option value="Piektiena">Piektdiena</option>
        </select><br><br>

        @if(isset($success) && $success == 1)
    <p>viss bija pareizi</p>
@endif

        <div class="lesson">
            <h2>1 stunda</h2>
            <label for="lesson1">Stunda:</label>
            <input type="text" id="lesson1" name="lessons[0][lesson]" required><br><br>

            <label for="plan1">Plānots:</label>
            <textarea id="plan1" name="lessons[0][plan]" required></textarea><br><br>

            <label for="homework1">Uzdots:</label>
            <input type="text" id="homework1" name="lessons[0][homework]" required><br><br>
        </div>

        <div class="lesson">
            <h2>2 stunda</h2>
            <label for="lesson2">Stunda:</label>
            <input type="text" id="lesson2" name="lessons[1][lesson]" required><br><br>

            <label for="plan2">Plānots:</label>
            <textarea id="plan2" name="lessons[1][plan]" required></textarea><br><br>

            <label for="homework2">Uzdots:</label>
            <input type="text" id="homework2" name="lessons[1][homework]" required><br><br>
        </div>

        <div class="lesson">
        <h2>3 stunda</h2>
            <label for="lesson1">Stunda:</label>
            <input type="text" id="lesson1" name="lessons[2][lesson]" required><br><br>

            <label for="plan1">Plānots:</label>
            <textarea id="plan1" name="lessons[2][plan]" required></textarea><br><br>

            <label for="homework1">Uzdots:</label>
            <input type="text" id="homework1" name="lessons[2][homework]" required><br><br>
        </div>

        <div class="lesson">
        <h2>4 stunda</h2>
            <label for="lesson2">Stunda:</label>
            <input type="text" id="lesson2" name="lessons[3][lesson]" required><br><br>

            <label for="plan2">Plānots:</label>
            <textarea id="plan2" name="lessons[3][plan]" required></textarea><br><br>

            <label for="homework2">Uzdots:</label>
            <input type="text" id="homework2" name="lessons[3][homework]" required><br><br>
        </div>

        <div class="lesson">
        <h2>5 stunda</h2>
            <label for="lesson1">Stunda:</label>
            <input type="text" id="lesson1" name="lessons[4][lesson]" required><br><br>

            <label for="plan1">Plānots:</label>
            <textarea id="plan1" name="lessons[4][plan]" required></textarea><br><br>

            <label for="homework1">Uzdots:</label>
            <input type="text" id="homework1" name="lessons[4][homework]" required><br><br>
        </div>

        <div class="lesson">
        <h2>6 stunda</h2>
            <label for="lesson2">Stunda:</label>
            <input type="text" id="lesson2" name="lessons[5][lesson]" required><br><br>

            <label for="plan2">Plānots:</label>
            <textarea id="plan2" name="lessons[5][plan]" required></textarea><br><br>

            <label for="homework2">Uzdots:</label>
            <input type="text" id="homework2" name="lessons[5][homework]" required><br><br>
        </div>

        <div class="lesson">
        <h2>7 stunda</h2>
            <label for="lesson1">Stunda:</label>
            <input type="text" id="lesson1" name="lessons[6][lesson]" required><br><br>

            <label for="plan1">Plānots:</label>
            <textarea id="plan1" name="lessons[6][plan]" required></textarea><br><br>

            <label for="homework1">Uzdots:</label>
            <input type="text" id="homework1" name="lessons[6][homework]" required><br><br>
        </div>

        <div class="lesson">
        <h2>8 stunda</h2>
            <label for="lesson2">Stunda:</label>
            <input type="text" id="lesson2" name="lessons[7][lesson]" required><br><br>

            <label for="plan2">Plānots:</label>
            <textarea id="plan2" name="lessons[7][plan]" required></textarea><br><br>

            <label for="homework2">Uzdots:</label>
            <input type="text" id="homework2" name="lessons[7][homework]" required><br><br>
        </div>

        <!-- Add more lessons as needed -->

        <button type="submit">Veidot stundu sarakstu</button>
    </form>
</body>
</html>