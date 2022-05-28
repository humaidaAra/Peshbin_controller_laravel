<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="Edit" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $data->id }}">
        BlogName: <input type="text" name="BlogName" value="{{ $data->BlogName }}"><br><br>
        Text: <textarea name="Text"cols="30" rows="10">{{ $data->Text }}</textarea><br><br>
        <input type="submit">
    </form>
</body>
</html>