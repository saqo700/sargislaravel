<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    div ul li {
        color: greenyellow;
        font-family: sans-serif;
        font-size: 24px;
    }
</style>
<body style="background-color: black"
>

<h1 style="text-align: center; color: orangered; font-family: sans-serif; font-size: 48px">ALL USERS LIST</h1>

@foreach($users as $user)
    <div>
        <ul>
            <li>{{$user->name}}</li>
            <li>{{$user->email}}</li>
            <li>{{$user->created_at}}</li>
        </ul>
    </div>
    <hr style="background-color: greenyellow">
@endforeach
</body>
</html>
