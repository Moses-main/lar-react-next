<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Members</title>
</head>
<body>
    
    <h1>Add Members</h1>
    <form action="add" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Name">
        <br>
        <br>
        <input type="email" name="email" placeholder="example@gmail.com">
        <br>
        <br>
        <input type="text" name="address" placeholder="20 Nwadinobi Crescent">
        <br>
        <br>
    <button type='submit'>Submit</button>
    </form>
</body>
</html>