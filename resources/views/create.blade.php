<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <style>
      form {
        display: flex;
        flex-direction: column;
        gap: 15px;
      }

      form button {
        width: 100px;
      }
    </style>
</head>
@if(Auth::check() && Auth::user()->admin == 1)

<body>
    <h1>Register</h1>
    <form method="POST" action="/register">
      @csrf
      <label>
          <span>name:</span>
          <input name="username">
      </label>
      @error("username")
        <p>{{$message}}</p>
      @enderror
      <label>
          <span>Email:</span>
          <input type="email" name="email">
      </label>
      @error("email")
        <p>Muļķis! {{$message}}</p>
      @enderror
      <label>
          <span>Password:</span>
          <input type="password" name="password">
      </label>
      @error("password")
        <p>Mēģini vēlreiz. {{$message}}</p>
      @enderror
      <button>Submit</button>
    </form>
</body>
@else
<style>
        body {
            background-color: #f2f2f2;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        h1 {
            font-size: 50px;
            color: #333;
        }
        p {
            color: #666;
        }
        img {
            width: 600px;
            height: 200px;
        }
    </style>
</head>
<body>
    <h1>upsii!!</h1>
    <img src="/IMGS/vtdt.png" alt="404 Error">
    <p>nevaru atrast kādu lapu tu mēģini te sameklēt</p>
    <p>Error code: 404</p>
    <a href="/">Atpakļ mājās urķi</a>
</body>
@endif
</html>