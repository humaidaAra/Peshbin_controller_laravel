<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th, td{
            border: 1px solid black;
        }
        a{
            text-decoration: none
        }
    </style>
</head>
<body>
    <h1>Home</h1>
    <a href="/addBlogs">AddBlogs</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>BLogName</th>
                <th>Delete</th>
                <th>Edit</th>
                <th>Comment</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->BlogName }}</td>
                <td><a href="/Delete?id={{ $data->id }}" style="color: red">X</a></td>
                <td><a href="/Comments?id={{ $data->id }}" style="color: green">Comment</a></td>
                <td><a href="/Edit?id={{ $data->id }}" style="color: blue">Edit</a></td>

            </tr>
            
            @endforeach
        </tbody>
    </table>
    

    
</body>
</html>