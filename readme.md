* laravel new l5todo
* php artisan key:generate
* php artisan app:name <name-of-your-application>
* First create the database in mysql
* then change environment files .env
* then seeds
composer dump-autoload
php artisan make:migration create_projects_and_tasks_tables --create="projects"
php artisan migrate // or
php artisan migrate:refresh  if there is changes

php artisan db:seed or
php artisan migrate:refresh --seed
php artisan make:controller PhotoController --resource --model=Photo
php artisan make:model Project
php artisan tinker <--- help to directly check database
App\Project::count();
