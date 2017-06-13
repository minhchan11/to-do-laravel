@extends('layouts.app')

@section('content')
    <h2> Edit {{ $task->name}} </h2>


    <div class="panel panel-success">
        <div class="panel-heading">
            Edit Task
        </div>

        <div class="panel-body">
        {!! Form::model(new todo\Task, ['method'=>'PATCH','route' => ['categories.tasks.update', $category->slug, $task->slug]]) !!}
            {{ csrf_field() }}
            @include('tasks/partials/_form', array('submit' => 'Edit Task','task' => $task))
        {!! Form::close() !!}
        </div>
    </div>

@endsection
