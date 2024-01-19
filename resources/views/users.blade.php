<h1>Users Login</h1>
{{-- Checking if error exist --}}
@if ($errors->any())
{{-- fetching all the errors that exist --}}
@foreach ($errors->all() as $err)
{{-- using a list to show them --}}
<li style="color: red">{{$err}}</li>
@endforeach
@endif
<form action="users" method="post">
    @csrf
    <input type="text" name="username" placeholder="Enter your username">
    <br>
    {{-- <span>@error('username'){{$message}}@enderror</span> --}}
    <br>
    <input type="text" name="userpassword" placeholder="Enter your password">
    <br>
    <button type="submit">Send</button>
</form>