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
          <span>group-id::</span>
          <input name="group-id">
      </label>
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

</html>