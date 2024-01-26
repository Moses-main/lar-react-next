# Join in Laravel

## What is join

This is the fetching of data from two interelated tables.
This is achieved by having a common ground in the two or more tables. This can be an id, or name or any other field that is interrelated within the different tables.

## Make controller

create a controller using the php code generator below

`php artisan make:controller EmployeeController`;

Then navigate to the controller and configure the controller accordingly

## Import DB Files

Use the php code below to impor the database

`use Illuminate\Support\Facades\DB;`

## Join with where conditions

The join condition or keyword has two parameters

`join(<a>,<b>)`

Where

<ul>
<li>a. The table to apply the join</li>
<li>b. The colum to apply the join</li>
</ul>
E.g.

`return DB::table("members")
->join("dogs","members.id","=","dogs.id")
->get();`

Then to get a data from a specific table then use the following code by specifyig the table which you'd want to get the data from

`return DB::table("members")
->join("dogs","members.id","=","dogs.id")
->select("dogs")
->get();`

The above codes generate the data fro m the dogs table.

### Remeber that this would only work on tables with interrelated data or fields.
