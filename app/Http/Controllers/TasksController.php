<?php
namespace todo\Http\Controllers;

use Illuminate\Http\Request;
use todo\Task;
use todo\Category;
use todo\Http\Controllers\Controller;
use Input;
use Redirect;

class TasksController extends Controller
{
    protected $rules = [
      'name' => ['required', 'min:3'],
      'slug' => ['required'],
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
      $tasks = Task::orderBy('created_at', 'asc')->get();
      return view('tasks.all', compact('tasks'));
    }

    public function index(Category $category)
    {
      return view('tasks.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category)
    {
      return view('tasks.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Category $category, Request $request)
    {
    $this->validate($request, $this->rules);

    $input = Input::all();
  	$input['category_id'] = $category->id;
  	Task::create($input);

  	return Redirect::route('categories.show', $category->slug)->with('message', 'Task created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category, Task $task)
    {
        return view('tasks.show', compact('category','task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category, Task $task)
    {
      return view('tasks.edit', compact('category','task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Category $category, Task $task)
    {
      $input = array_except(Input::all(), '_method');
      $task->update($input);

      return Redirect::route('categories.tasks.show', [$category->slug, $task->slug])->with('message', 'Task updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, Task $task)
    {
      // Task::findOrFail($id)->delete();
      $task->delete();
      return Redirect::route('categories.show',$category->slug)->with('message', 'Task Deleted.');
    }
}
