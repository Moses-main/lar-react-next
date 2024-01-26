# Seeding in Laravel

## What is seeding

This is the adding dummy data to the database using the command line.

## How to generate seeder file

By using the command below, you create a seeder file called MembersSeeder.
`php artisan make:seeder MembersSeeder`

After creating the seeder file, then ensure to register the Str method and Facades mehtod.

`use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;`

Put the above code in the seeder file.

## Data seeding

Add the following lines of code to the seeder file:
`lass MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("members")->insert([
            'name' =>Str::random(10),
            'email' =>Str::random(10).'@gmail.com',
            'address' =>Str::random(10),
        ]);
    }
}
`
Always ensure that the schema matches the seeder file definition.

And then run the following command:

`php artisan db:seed --class=MembersSeeder`

To add another seed into the table, just repeat the above command.
