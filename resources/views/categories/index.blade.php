@extends('layouts.app')
@include('common.errors')
@section('content')
    <h2>Categories</h2>

    @if ( !$categories->count() )
        You have no categories
    @else
    <div class="panel panel-success">
        <div class="panel-heading">
            Current Categories
        </div>

        <div class="panel-body">
            <table class="table table-striped task-table">

                <!-- Table Headings -->
                <thead>
                    <th>Categories</th>
                    <th>&nbsp;</th>
                </thead>

                <!-- Table Body -->
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <!-- Task Name -->
                            <td class="table-text">
                                <div><a href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a></div>
                            </td>

                            <td>
                              <a href="{{ route('categories.edit', $category->slug) }}" class="btn btn-info"> Edit</a>
                              {!! Form::open(['route' => ['categories.destroy', $category->slug], 'method' => 'delete']) !!}
                                  {{ csrf_field() }}
                                  <button type="submit" class="btn btn-danger">Delete Category</button>
                              {!! Form::close() !!}
                              </form>
                           </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
    <a href="{{ route('categories.create') }}" class="btn btn-block btn-success"> Create new category</a>
    </p>
@endsection
