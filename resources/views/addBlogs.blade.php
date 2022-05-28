<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AddBlogs</title>
</head>
<body>
    <form action="addBlogs" method="post">
        @csrf
        BlogName: <input type="text" name="BlogName"><br><br>
        Text: <textarea name="Text" cols="30" rows="10"></textarea><br><br>
        <input type="submit">
    </form>
</body>
</html>