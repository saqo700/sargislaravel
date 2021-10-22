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
    input{
        margin: 15px 15px 15px 15px;
        height: 50px;
        width: 300px;
    }
    input::placeholder{
        text-align: center;
    }
</style>
<body style="
              width: 100%;
              height: 100vh;
              background: linear-gradient(90deg,
                          rgba(2,0,36,1) 0%,
                          rgba(9,9,121,1) 35%,
                          rgba(0,212,255,1) 100%);
              display: flex;
              justify-content: center;
              align-items: center;
              padding: 0;margin: 0;">

<form action="/sign-up" method="POST">
    @csrf
    <input type="name" name="name" placeholder="Your Name"><br>
    <input type="email" name="email" placeholder="Your Email"><br>
    <input type="password" name="password" placeholder="Your Password"><br>
    <input type="submit" value="SIGN UP">
</form>

</body>
</html>
