<?php
use todo\Task;
use todo\Category;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
require_once __DIR__."/../app/Task.php";

Route::get('role', [
  'middleware' => 'Role:test role',
  'uses' => 'TestController@index',
]);
/**
 * Display All Tasks
 */
Route::get('/hello', function () {
    return view('hello', [
      'name' => 'Minh'
    ]);
});

Route::model('categories.tasks', App\Task::class);
Route::model('categories',  App\Category::class);
// Route::resource('tasks', 'TasksController'); this is normal route, may be used for many to many
Route::resource('categories', 'CategoriesController');
Route::resource('categories.tasks', 'TasksController'); // establish one to many relationship

Route::get('/', function () {
    return view('welcome');
});


//Change the URL segments

// Route::bind('tasks', function($value, $route) {
// 	return App\Task::whereSlug($value)->first();
// });
// Route::bind('categories', function($value, $route) {
// 	return App\Category::whereSlug($value)->first();
// });
