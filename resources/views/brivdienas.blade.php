<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<br>
<br>
<br>
<br>
<body>
@include('header')
<link href="/css/index.css" rel="stylesheet"/>
<h2 class="brivdienas-h22">Mācību gada laikā noteiktās brīvdienas:</h2>
    <div class="brivdienas">

    <h2 class="brivdienas-h2">Rudens brīvdienas</h2>
    <h3 class="brivdienas-h3">  no 2023. gada 23. oktobra līdz 27. oktobrim;</h3>
        <br>
    <h2 class="brivdienas-h2">Ziemas brīvdienas</h2> 
    <h3 class="brivdienas-h3"> no 2023. gada 25. decembra līdz 2024. gada 5. janvārim;</h3>
        <br>
    <h2 class="brivdienas-h2">Pavasara brīvdienas</h2>
     <h3 class="brivdienas-h3">no 2024. gada 11. marta līdz 15. martam.</h3>
        <br>
    <h2 class="brivdienas-h2">Vasaras brīvdienas</h2>
    <h3 class="brivdienas-h3"> 1.–8. klasēm un 10.–11. klasēm – no 2024. gada 1. jūnija līdz 31. augustam.</h3>
    </div>
    <script src="{{ asset('js/header.js') }}"></script>
</body>
</html>