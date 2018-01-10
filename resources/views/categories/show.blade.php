@extends('layouts.app')
@section('header')
    <div class="page-header">
        <h1>Category / Show #{{$category->id}}</h1>
    </div>
@endsection

@section('content')
    <div class="well well-sm">
        <div class="row">
            <div class="col-md-6">
                <a class="btn btn-link" href="{{ url('categorias') }}"><i class="glyphiconglyphicon glyphicon-backward"></i> Back</a>
            </div>
            <div class="col-md-6">
                 <a class="btn btn-sm btn-warning pull-right" href="{{ route('categories.edit', $category->id) }}">
                    <i class="fa fa-edit"></i> Edit
                </a>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-md-12">

            <label>Title</label>
<p>
	{{ $category->title }}
</p> <label>Description</label>
<p>
	{{ $category->description }}
</p> <label>Type</label>
<p>
	{{ $category->type }}
</p>

        </div>

    </div>
@endsection
