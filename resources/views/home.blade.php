<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('login')}}" method="POST">
        @csrf
        <input type="email" name="email">
        <input type="password" name="password">
        <button type="submit">dekhelni pls hh</button>
    </form>
    <form action="{{route('register')}}" method="POST">
        @csrf
        <input type="email" name="email">
        <input type="text" name="name">
        <input type="password" name="password">
        <button type="submit">9eyedni pls hh</button>
    </form>
</body>
</html>