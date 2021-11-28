<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/groups/add" method="POST">
        @csrf
        <label for="group_name">Group Name: </label>
        <input type="text" name="name">
        <br>
        <label for="group_desc">Group Description: </label>
        <input type="text" name="desc">
        <br>
        <input type="submit" value="Tambahkan grup">
    </form>
</body>
</html>