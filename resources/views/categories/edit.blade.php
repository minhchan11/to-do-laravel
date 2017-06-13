@extends('layouts.app')

@section('content')
    <h2> Edit {{ $category->name}} </h2>


    <div class="panel panel-success">
        <div class="panel-heading">
            Edit Category
        </div>

        <div class="panel-body">
        {!! Form::model(new todo\Category, ['method'=>'PATCH','route' => ['categories.update', $category->slug]]) !!}
            {{ csrf_field() }}
            @include('categories/partials/_form', array('submit' => 'Edit Category','category' => $category))
        {!! Form::close() !!}
        </div>
    </div>

@endsection
