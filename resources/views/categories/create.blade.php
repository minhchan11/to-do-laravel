@extends('layouts.app')

@section('content')
    <h2> Make new category </h2>


    <div class="panel panel-success">
        <div class="panel-heading">
            Create Category
        </div>

        <div class="panel-body">
        {!! Form::model(new todo\Category, ['route' => ['categories.store']]) !!}
            {{ csrf_field() }}
            @include('categories/partials/_form', array('submit' => 'Add Category'))
        {!! Form::close() !!}
        </div>
    </div>

@endsection
