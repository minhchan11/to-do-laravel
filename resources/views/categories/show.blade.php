@extends('layouts.app')

@section('content')
    <h2>Categories</h2>

    <div class="panel panel-secondary">
        <div class="panel-heading">
            Current Category
        </div>

        <div class="panel-body">
          <h2>{{ $category->name }}</h2>
            <table class="table table-striped task-table">
              @if ( !$category->tasks->count() )
                      Your Category has no tasks.
              @else
              <!-- Table Headings -->
              <thead>
                  <th>Tasks</th>
                  <th>&nbsp;</th>
              </thead>
              <!-- Table Body -->
              <tbody>
                  @foreach( $category->tasks as $task )
                      <tr>
                          <!-- Task Name -->
                          <td class="table-text">
                              <div><a href="{{ route('categories.tasks.show', [$category->slug, $task->slug]) }}">{{ $task->name }}</a></div>
                          </td>
                          <td>
                            <a href="{{ route('categories.tasks.edit', [$category->slug, $task->slug]) }}" class="btn btn-info">Edit</a>
                            {!! Form::open(['route' => ['categories.tasks.destroy', $category->slug,$task->slug], 'method' => 'delete']) !!}
                            <button type="submit" class="btn btn-danger">Delete Task</button>
                            {!! Form::close() !!}
                         </td>
                      </tr>
                  @endforeach
              </tbody>
            @endif
            </table>
        </div>
    </div>

    <a href="{{ route('categories.tasks.create', [$category->slug]) }}" class="btn btn-block btn-success"> Create new task</a>
@endsection
