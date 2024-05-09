<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/css/404.css" rel="stylesheet"/>
</head>
<body> 
<form action="/"></form>
<div class="flex-container">
  <div class="text-center">
    <h1>
      <span class="fade-in" id="digit1">4</span>
      <span class="fade-in" id="digit2">0</span>
      <span class="fade-in" id="digit3">4</span>
    </h1>
    <h3 class="fadeIn">PAGE NOT FOUND</h3>
    <button onclick="redirectTo('/')" type="button" name="button">Return To Home</button>
  </div>
</div>
</form>
</body>
<script>
    function redirectTo(url) {
        // Redirect to the specified URL
        window.location.href = url;
    }
</script>
</html>