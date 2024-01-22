# What is a model

This is used to connect the application with the database

| DB Table Name | Model Name |
| ------------- | ---------- |
| users         | User       |
| employees     | Employee   |

So for every model, the table or database name will be a pluralized name.

## Configuration for the database

1. Edit the `.env` file and add the following:

`DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lare
DB_USERNAME=root
DB_PASSWORD=`

After configuring the `.env` file for the database, go ahead and create a model using the command line by running this codes:

`php artisan make:model <model-name>`

Remember to have a camel case version of the model name.`e.g. User` instead of `user`.
