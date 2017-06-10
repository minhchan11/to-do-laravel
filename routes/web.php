<?php
use todo\Task;
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

Route::resource('tasks', 'TasksController');
