@extends('layouts.app')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Category / Edit #{{$category->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
	<label for="title-field">Title</label>
	<input class="form-control" type="text" name="title" id="title-field" value="{{ old('title', $category->title ) }}" />
</div> <div class="form-group">
	<label for="description-field">Description</label>
	<textarea name="description" id="description-field" class="form-control" rows="3">{{ old('description', $category->description ) }}</textarea>
</div> <div class="form-group">
	<label for="type-field">Type</label>
	--type--
</div>

                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Editar</button>
                    <a class="btn btn-link pull-right" href="{{ route('categories.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection