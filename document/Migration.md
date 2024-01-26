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
        });0
`

## Migrate to database

Then to migrate the table created using the commandline interface, then use the following command below inside the command line interface.

`php artisan migrate`

## Reset of Migration

This command will reset the migration. In other words, it will delete the table created in the database from the database and leave the database as it was before the migration was done.

By simply using the command below, the migration are undone and automatically deleted from the database.

`php artisan migrate:reset`

Migrations never impact tables created manually.

## Rollback Migration

This command will reset the last migrated table.
Using the command below, the last migration will be automatically deleted from the database.

`php artisan migrate:rollback`

## Rollback steps.

Remember that rollback erases the last migration created. So to rollback multiple migrations, we make use of the rollback step command below.

`php artisan migrate:rollback --step 3`

## Refresh

This command is used to refresh the table in the database which may have recieved changes. For instance, having to make some changes in the schema definition, by using the migration:refresh command, the table is updated with the new schema definition.

`php artisan migrate:refresh`

After running this code, the old data would be removed and then would remigrate it again.

## Single File Migration

To migrate a single file, you need the name of the migration file to be migrated.

Once gotten, then use the code below to migrate only that particular file or migration.

`php artisan migrate --path=/database/migrations/<migration_file_name>`

e.g.

`php artisan migrate --path=/database/migrations/2024_01_26_202127_create_test7_table.php`
