<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/login" method="POST"">
    @csrf
    <input type="email" name="email" placeholder="Your Email">
    <input type="password" name="password" placeholder="Your Password">
    <input type="submit" value="LOG IN">
</form>
<div>
    Copyright {{ $date }}
</div>
<div>
    <a href="{{route('user.signup')}}">SIGN-UP</a>
</div>

@if($status)
    <button>CREATE</button>
@endif
</body>
</html>
