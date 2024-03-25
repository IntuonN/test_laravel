<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/customer/{{$tit_data -> tit_id}}" method="POST">
        @csrf
        @method("PUT")
        <h1>Edit</h1>
        <br>
        <label for="">name</label>
        <br>
        <input type="text" name="name" value = {{$tit_data -> tit_name}}>
        <br>
        <label for="">pin code</label>
        <br>
        <input type="text" name="pin" value= {{$tit_data -> tit_pin}}>
        <br>
        <button type="submit">submit</button>
    </form>

</body>
</html>
