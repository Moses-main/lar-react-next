# Laravel Accessor

## What is Accessor

This is a way of modifying the data structure before displaying the data to the user using laravel.

NB: The data isn't modified in the database but only in the laravel before displaying the data to the user.

## Make a Controller amd a Model

if table is empty then seed the table using the seeding function leant ealier.

## Make an Accessor Function

Go into the model and define the accessor function, which will capitalize the first letter of the name field.Use the code below for that:

`public function getNameAttribute($value){
    return ucFirst($value);
}`

Then for another example, to add the word 'INDIA' to the end of the address field,

`// Adding 'INDIA' to the address field.
    public function getAddressAttribute($value){
        return $value.", INDIA";
    }
`
