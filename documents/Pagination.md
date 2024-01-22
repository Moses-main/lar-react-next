# What is Pagination

This is the showing of data large amount of data in chunks likely by the use of pages. Also to make the pages to load faster and more efficient, it is recommended to use the pagination in rendering data.

## How to display data in pagination mode

After creating your application in the MVC approach i.e. creating the model, view and controller, then retrieve the data from the database through getting all the data from the model using the code below

`function show(){
        $data = Member::all();
        // return view('member',['members'=>$data]);
        return view('list', ['members'=>$data]);
    }
}`

But when you now want to apply the pagination, then use the code below and observe the `paginate(5)` function.

`function show(){
        $data = Member::paginate(5);
        // return view('member',['members'=>$data]);
        return view('list', ['members'=>$data]);
    }
}`

## Futhermore

On the page displaying the data, add the following lines of code to the already code in the file.

`<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagination</title>
</head>
<body>
    <h1>Members list</h1>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Address</td>
        </tr>
        @foreach ($members as $member)
        {{-- The data displayed here depends on your data schema  for instance my instance would have 
            1. id
            2. name
            3. email
            4. address--}}
            <tr>
                <td>{{$member['id']}}</td>
                <td>{{$member['name']}}</td>
                <td>{{$member['email']}}</td>
                <td>{{$member['address']}}</td>
            </tr>
        @endforeach
    </table>
    
</body>
</html>`

## Adding the pagination effect

<!-- <pre> -->
 <span>
        {{$users->links()}}
    </span>

    <style>
        .w-5{
            display: none;
        }
    </style>

<!-- </pre> -->
