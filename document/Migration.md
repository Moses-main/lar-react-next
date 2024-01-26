# Migration in Laravel

Migrations simply make the table structure and not the table datab

## What is Migration

This is the generation table and its content (fields and columns)
dynamically using laravel in the command line.

You don't need to create your database table manually. The migration creates the database table automatically.

## Make table with migration

use the migration command line syntax below to make a migration called `test`.

`php artisan make:migration <create_tablename_table>`
`php artisan make:migration create_test_table`

Then once this code runs successfully, you can find the migration using this path

`database/migrations/<timestamp_name_of_migration>`

Then inside the migration, you'll find a schema file with the name of the table created. Exampls:

`Schema::create('test', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
`

## write code for column fields

To write code for column fields, configure the schema.

`Schema::create('test', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->timestamps();
        });
`

## Migrate to database

Then to migrate the table created using the commandline interface, then use the following command below inside the command line interface.

`php artisan migrate`
