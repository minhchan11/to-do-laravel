@extends('layouts.app')

@section('content')
    <h2> Make new category </h2>


    <div class="panel panel-success">
        <div class="panel-heading">
            Create Category
        </div>

        <div class="panel-body">
          <form action="categories.store">
            {{ method_field('POST') }}
            {{ csrf_field() }}
            @include('categories/partials/_form', array('submit' => 'Add Category'))
          </form>
        </div>
    </div>

@endsection
