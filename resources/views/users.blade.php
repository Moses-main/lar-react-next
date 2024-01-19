<h1>Users Login</h1>

<form action="users" method="post">
    @csrf
    <input type="text" name="username" placeholder="Enter your username">
    <br>
    <span style="color: red">@error('username'){{$message}}@enderror</span>

    <br>
    <input  type="text" name="userpassword" placeholder="Enter your password">
    <br>
    <span style="color: red">@error('userpassword'){{$message}}@enderror</span>
    <br>
    <button type="submit">Send</button>
</form>