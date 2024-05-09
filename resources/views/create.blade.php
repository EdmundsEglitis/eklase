<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="/css/register.css" rel="stylesheet"/>
</head>


<body>
  @include('header')
  <br>
    <h2>Reģistrē lietotājus</h2>
    <form method="POST" action="/register">
      @csrf
      <label>
          <span>vārds:</span>
          <input name="username">
      </label>
      
      @error("username")
        <p>{{$message}}</p>
      @enderror
      <label>
          <span>Grupas-ID:</span>
          <input name="group-id">
      </label>
      <label>
          <span>Epasts:</span>
          <input type="email" name="email">
      </label>
      @error("email")
        <p>Muļķis! {{$message}}</p>
      @enderror
      <label>
          <span>Parole:</span>
          <input type="password" name="password">
    </label>

      @error("password")
        <p>Mēģini vēlreiz. {{$message}}</p>
      @enderror


      <button>Reģistrēt</button>
    </form>
</body>

</html>