@extends('layouts.app')

@section('content')
   @include('admin.includes.errors')

    <div class="card">
        <div class="card-header">
            <h3>Update category: {{ $category->name }}</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('category.update', ['id' => $category->id ]) }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="button btn btn-success">
                            Update category
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
