# What is a middleware ?

A middleware is a program that filters a user request before it is sent to the server.

In laravel, there are `3` different levels of middleware:

1. `Global Middleware`: This middleware applies to all the routes and pages in the application.

2. `Group Middleware`: This is the type of middleware that is applied on some number of routes or collection of routes.

3. `Route Middleware`: This middleware is targetted to a specific route and applies only to that route alone.

## Making a middleware in laravel

To make a middleware, it is easily done using the command line.

1. <code>php artisan make:middleware [middleware-name] </code>

2. locate the `app` directory, then the `Http` then the `Middleware` and define what the middleware does.

3. configure the middleware or register the middleware based on the level you want it to perform.
   Go to the `Kernel.php` locating it through this path `app/Http/Kernel.php`, then register middleware.
