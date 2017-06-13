<?php

namespace todo\Http\Controllers;

use Illuminate\Http\Request;
use todo\Category;
use todo\Task;
use todo\Http\Controllers\Controller;
use Input;
use Redirect;

class CategoriesController extends Controller
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
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, $this->rules);
      $input = Input::all();
      Category::create( $input );

      return Redirect::route('categories.index')->with('message', 'Category created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        // $category = Category::with('tasks')->get(); //Prevent N+1 problem
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
         return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Category $category, Request $request)
    {
      $this->validate($request, $this->rules);
      $input = array_except(Input::all(), '_method');
	    $category->update($input);

	    return Redirect::route('categories.show',$category->slug)->with('message', 'Project updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
          return Redirect::route('categories.index')->with('message', 'Category deleted');
    }
}
