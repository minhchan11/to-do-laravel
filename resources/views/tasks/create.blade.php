@extends('layouts.app')

@section('content')
    <h2> Make new task </h2>


    <div class="panel panel-success">
        <div class="panel-heading">
            Create task for {{$category->name}}
        </div>

        <div class="panel-body">
        {!! Form::model(new todo\Task, ['route' => ['categories.tasks.store', $category->slug]]) !!}
            {{ csrf_field() }}
            @include('tasks/partials/_form', array('submit' => 'Add Task'))
        {!! Form::close() !!}
        </div>
    </div>

@endsection
