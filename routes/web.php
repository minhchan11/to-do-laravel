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
// /**
//  * Add A New Task
//  */
//  Route::post('/task', function (Request $request) {
//      $validator = Validator::make($request->all(), [
//          'name' => 'required|max:255|min:3',
//      ]);
//
//      if ($validator->fails()) {
//          return redirect('/')
//              ->withInput()
//              ->withErrors($validator);
//      }
//
//      $task = new Task;
//      $task->name = $request->name;
//      $task->save();
//
//      return redirect('/');
//  });
//
//
// /**
//  * Delete An Existing Task
//  */
//  Route::delete('/task/{id}', function ($id) {
//      Task::findOrFail($id)->delete();
//
//      return redirect('/');
//  });
