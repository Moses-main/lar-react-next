# What is HttpClient

This allows for the communication between computers or servers through HTTP requests through the use of APIs.

## How to use HttpClient in laravel

The HttpClient is first imported into the file you wan to use with.
Simply add `use Illuminate\Support\Facades\Http;
` at the top of your file and then continue with the call of the
`Http::get(<api-url>)` method.

Secondly, after fetching the api, it is necessary to assign it to a variable.

`$collections = Http::get(<api-url>)`

Then return the collection alongside the view. `rturn view('<viewp path/page'),['collections'=>collections]`

## How to send data to view

Then grab the `$collections` variable at the view or frontend and then get the data from it for example.

## How to show data in HTML table

`<table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Profile Photo</td>
        </tr>
        @foreach ($collections as $item)
        <tr>
            <td>$item['id']</td>
            <td>$item["firstname"]</td>
            <td>$item['email']</td>
            <td> <img src={{$item['avatar']}} alt=""> 
            </td>
        </tr>    
        @endforeach
`

<pre>

<table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Profile Photo</td>
        </tr>
        @foreach ($collections as $item)
        <tr>
            <td>$item['id']</td>
            <td>$item["firstname"]</td>
            <td>$item['email']</td>
            <td> <img src={{$item['avatar']}} alt=""> 
            </td>
        </tr>    
        @endforeach

</pre>
