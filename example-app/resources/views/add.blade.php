<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/customer" method="POST">
        @csrf
        <h1>add</h1>
        <br>
        <label for="">name</label>
        <br>
        <input type="text" name="name">
        <br>
        <label for="">pin code</label>
        <br>
        <input type="text" name="pin">
        <br>
        <button type="submit">submit</button>
    </form>

</body>
</html>
