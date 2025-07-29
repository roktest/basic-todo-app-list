### Commands I ran to start the project

- composer create-project laravel/laravel basic-todo-list-app
- php artisan key:generate --ansi
- php artisan serve
- php artisan cache:clear 


- docker compose up

once docker is running close the project and run
- php artisan migrate

As we need the model of a task and to be able to connect the model with the view we need to create the model and include its migration to the data base. so, run
php artisan make:model Task -m

To apply the migrations, run again
- php artisan migrate
if I need to rollback
- php artisan migrate:rollback


We need to create a Factory which contains rules and fields of  task model to then seed it
php artisan make:factory TaskFactory --model=Task
Seeder is the actual place where we are loading data into the database.It does NOT overwrite, it generates new data. It is used to populate the db
php artisan make:seeder
php artisan db:seed
So, note there are two folders named 'factories' and 'seeders' on database directory

If we do not want to have a lot of info in the DB 
ONLY RUN IT ON DEVELOPMENT ENV
php artisan migrate:refresh --seed


Modified the query builders on web.php after hitting the DB
php artisan tinker lets us runn the queries on the web.php file
for example
\App\Models\Task::findOrFail(2);
\App\Models\Task::select('id', 'title')->where('completed'
, true)->get();
\App\Models\Task::all();
type exit to exit tinker


