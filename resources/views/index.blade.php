<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/css/index.css" rel="stylesheet"/>
</head>
<body>
    @include('header')
        <h1>POSTS</h1>
    <div class="container">
        @foreach($news as $new)
            <div id="divItem-{{$loop->index}}" class="item-{{$loop->index}}"><h2 class="card-title"> {{$new->title}} </h2></div>
        @endforeach
        <div class="item-4">

        <form method="POST" action="/login">
      @csrf
      <label>
          <p class="login">Personas kods</span>
          <br><br>
          <input name="presonas-kods">
      </label>
      <label>
          <p class="login">Parole</p>
          <input type="password" name="pa">
      </label>
      <br><br>
      <button class="login-button">Pieslēgties</button>
    </form>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>