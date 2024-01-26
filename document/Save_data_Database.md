# How to save data in the database

## Ensure you have the right database settings

        `

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=<b>`blog`</b>
    DB_USERNAME=root
    DB_PASSWORD=`

## Make html form in view

Create a new blade file with the name `addmembers` then add the following lines of code

`<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Members</title>
</head>
<body>
    
    <h1>Add Members</h1>
    <form action="" method="post">
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
</html>`

## Make controller and model

### Make Controller

Use the line of code below to create a controller directly from the command line

`php artisan make:controller <controller name>`

Then add the these codes in the controller file created above.

` `

### Make Model

Use the below code to create a model

`php artisan make:model Member`

Then add the following code into the model created above to over look the timestamps.

<code>
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
use HasFactory;
public $timestamp=false;
}

</code>

Then add these codes at the head of the controller file so as to use the model created

`use App\Models\Member;
`

## Make Migration and define schema

Use the code below to create a migration for your table and then add the following table fields.

`php artisan make:migration create_members_table --create=members
`

Then create your schema

<pre>
`
    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->timestamps();
        });
    }`
</pre>

Then run the following command

`php artisan migrate`

## Make routes

Then in the web.php file which is inside of the routes folder, add the following codes

Add this at the head of the file to enable your controller to be seen by the route file

`use App\Http\Controllers\<controller-name>;
`

Then create this route below to display the page

`Route::view('/','addmembers');
`
For displaying the page to insert the details to be submitted to the controller and then to the database.

Then the route below to send the data to the database

`Route::post(''add',[<controller-name>::class,"addData"]);`

## Save Data in Table

To add data to the database, first create the fields in the controller by using this codes below.

<code>

function addData(Request $req){
$member = new Member();
$member->name = $req->name;
$member->email = $req->email;
$member->address = $req->address;
$member->save();

    }

</code>

Add your data and then save by using the submit button on the form section.
