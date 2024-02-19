<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/add.css")}}">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Add Form</h1>
        <br>
        <form action="/customers" method = "POST">
            @csrf
            <label for="">Name : </label>
            <input type="text" name = "name">
            <br>
            <br>
            <label for="">Phone : </label>
            <input type="text" name = "phone">
            <br>
            <br>
            <button class ="submit-btn" type = "submit">submit</button>
        </form>
    </div>
</body>
</html>