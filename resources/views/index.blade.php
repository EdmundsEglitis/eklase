<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    @include('header')
        <h1>POSTS</h1>
    <div class="container">
        @foreach($news as $new)
            <div id="divItem-{{$loop->index}}" class="item-{{$loop->index}}">
                <h2 class="card-title"> {{$new->title}} </h2>
                <img class="img-{{$loop->index}}" src="/IMGS/{{$new->imageURL}}">
            </div>
        @endforeach
        <div class="item-4">

        <form class="login-form" method="post" action="/">
    @csrf
    @if ($errors->any())
        <div class="alert alert-danger"><h2 class="card-title">{{ $errors->first('email') }}</h2></div>
    @endif
    <label class="login-label">
        <span class="login">Epasts:</span>
        <input class="login-input" name="email" value="{{ old('email') }}">
    </label>
    <label class="login-label">
        <span class="login">Parole:</span>
        <input class="login-input" type="password" name="password">
    </label>
    <button class="login-button">Pieslēgties</button>
</form>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
@include('footer')