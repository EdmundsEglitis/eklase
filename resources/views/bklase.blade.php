<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Čau {{$user->email}}</h2>
    @if($user->admin == 1)
    sveiks admin
@endif
</body>
</html>