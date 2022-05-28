<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ $data->BlogName }}</h1>
    <h3>{{ $data->Text }}</h3>
    <hr>
    <h2>Comments:</h2>
    @foreach ($comments as $comment)
        <hr>
        <label>{{ $comment->UserName }}</label><br>
        <label>{{ $comment->Comments }}</label><br>
        <hr>
    @endforeach




    <form action="AddComment" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $data->id }}">
        UserName: <input type="text" name="User"><br><br>
        Comment: <input type="text" name="Comment"><br><br>
        <input type="submit" value="Post">
    </form>
</body>
</html>