<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagination</title>
</head>
<body>
    <h1>users list</h1>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Address</td>
        </tr>
        @foreach ($users as $user)
        {{-- The data displayed here depends on your data schema  for instance my instance would have 
            1. id
            2. name
            3. email
            4. address--}}
            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{$user['address']}}</td>
            </tr>
        @endforeach
    </table>
    <span>
        {{$users->links()}}
    </span>

    <style>
        .w-5{
            display: none;
        }
    </style>
</body>
</html>