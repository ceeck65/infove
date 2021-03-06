@extends('layouts.app')

@section('content')
    <br>
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Categorias
            <a class="btn btn-success pull-right" href="{{ route('categories.create') }}"><i class="fa fa-plus-circle"></i> Crear Nueva Categoria</a>
        </h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            @if($categories->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Titulo</th> <th>Descripcion</th>
                            <th class="text-right">OPCIONES</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td class="text-center"><strong>{{$category->id}}</strong></td>

                                <td>{{$category->title}}</td> <td>{{$category->description}}</td>
                                
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('categories.show', $category->id) }}">
                                        <i class="fa fa-eye"></i> Ver
                                    </a>
                                    
                                    <a class="btn btn-xs btn-warning" href="{{ route('categories.edit', $category->id) }}">
                                        <i class="fa fa-edit"></i> Editar
                                    </a>

                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE">

                                        <button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $categories->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection