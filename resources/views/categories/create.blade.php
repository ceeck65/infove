@extends('layouts.app')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Category / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('categories.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
	<label for="title-field">Titulo</label>
	<input class="form-control" type="text" name="title" id="title-field" value="" />
</div> <div class="form-group">
	<label for="description-field">Descripcion</label>
	<textarea name="description" id="description-field" class="form-control" rows="3"></textarea>
</div> <div class="form-group">
	<label for="type-field">Type</label>
   <input class="form-control" type="text" name="type" id="title-field" value="" />
</div>

                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('categories.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection